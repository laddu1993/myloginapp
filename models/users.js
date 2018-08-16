var mongoose = require('mongoose');
var bcrypt = require('bcryptjs');

mongoose.connect('mongodb://localhost/test');

var db = mongoose.connection;

// User Schema
var Schema = mongoose.Schema({
	email: {
		type: String,
		index: true
	},
	password: {
		type: String
	}
});

var User = module.exports = mongoose.model('Users', Schema);

module.exports.createUser = function(newUser, callback){
	bcrypt.genSalt(10, function(err, salt) {
	    bcrypt.hash(newUser.password, salt, function(err, hash) {
	        // Store hash in your password DB.
	        newUser.password = hash;
	        newUser.save(callback);
	    });
	});
}