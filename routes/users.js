var express = require('express');
var router =  express.Router();

var User =  require('../models/users');
// Register
router.get('/register', function(req, res){
	res.render('register');
});

router.get('/login', function(req, res){
	res.render('login');
});

router.post('/register', function(req, res){
	var email = req.body.email;
	var password = req.body.password;
	
	// Validation errors
	req.checkBody('email', 'Email is required').notEmpty();
	req.checkBody('email', 'Email is not valid').isEmail();
	req.checkBody('password', 'Password is required').notEmpty();

	var errors = req.validationErrors();
	console.log(errors);
	if (errors) {
		res.render('register',{
			errors:errors
		});
	}else{
		var newUser = new User({
			email: 'email',
			password: 'password'
		});

		User.createUser(newUser, function(err, user){
			if (err) throw err;
			console.log(user);
		});

		req.flash('success_msg', 'Registered Sucessfully!');

		res.redirect('/users/login');

	}

});

module.exports = router;