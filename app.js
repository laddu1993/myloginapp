const express = require('express');
const path = require('path');
const cookieParser = require('cookie-parser');
const bodyParser = require('body-parser');
const exphb = require('express-handlebars');
const expressValidator = require('express-validator');
const flash = require('connect-flash');
const session = require('express-session');
const passport = require('passport');
const LocalStartegy = require('passport-local').Strategy;
const mysql = require('mysql');

const routes = require('./routes/index');
const users = require('./routes/users');

// App Init
var app = express();

// View Engine
app.set('views', path.join(__dirname, 'views'));
app.engine('handlebars', exphb({ defaultLayout : 'layout'}));
app.set('view engine', 'handlebars');

// BodyParser Middleware
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(cookieParser());

// Set Static folder
app.use(express.static(path.join(__dirname, 'public')));

// Express Session
app.use(session({
	secret: 'secret',
	saveUninitialized: true,
	resave: true
}));

// Passport Init
app.use(passport.initialize());
app.use(passport.session());

// Express Validator
app.use(expressValidator({
	errorFomatter: function(param, msg, value){
		var namespace = param.split('.')
		, root        = namespace.shift()
		, formParam   = root;

		while(namespace.length){
			formParam += '[' +namespace.shift() + ']';
		}

		return {
			param : formParam,
			msg : msg,
			value : value
		};
	}
}));

// Connect Flash
app.use(flash());

// Global Vars
app.use(function(req, res, next){
	res.locals.success_msg = req.flash('success_msg');
	res.locals.error_msg = req.flash('error_msg');
	res.locals.error = req.flash('error');
	next();
});

app.use('/', routes);
app.use('/users', users);

// Set Port 
app.set('port', (process.env.PORT || 3000));

app.listen(app.get('port'), function(){
	console.log('Server started on port '+ app.get('port'));
});