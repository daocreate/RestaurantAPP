<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Database Manager Auto Load
	|--------------------------------------------------------------------------
	|
	| Determines if the database manager will be loaded one every request.
	|
	| By default, the database manager is loaded on every request and set on
	| a property of the application instance. However, if you will not be using
	| any of the Laravel database facilities, you may set this to "false".
	|
	| Loading the database manager does not create database connections. The
	| connections are only established once you request a connection from the
	| database manager instance.
	|
	*/

	'autoload' => true,

	/*
	|--------------------------------------------------------------------------
	| Default Database Connection
	|--------------------------------------------------------------------------
	|
	| The name of your default database connection.
	|
	| This connection will be the default for all database operations unless a
	| different connection is specified when performing the operation.
	|
	*/

	'default' => 'sqlite',

	/*
	|--------------------------------------------------------------------------
	| Database Connections
	|--------------------------------------------------------------------------
	|
	| All of the database connections used by your application.
	|
	| Supported Drivers: 'mysql', 'pgsql', 'sqlite'.
	|
	| Note: When using the SQLite driver, the path and "sqlite" extention will
	|       be added automatically. You only need to specify the database name.
	|
	| Using a driver that isn't supported? You can still establish a PDO
	| connection. Simply specify a driver and DSN option:
	|
	|		'odbc' => array(
	|			'driver'   => 'odbc',
	|			'dsn'      => 'your-dsn',
	|			'username' => 'username',
	|			'password' => 'password',
	|		)
	|
	| Note: When using an unsupported driver, Eloquent and the fluent query
	|       builder may not work as expected.
	|
	*/

	'connections' => array(

		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => 'application',
		),

		'mysql' => array(
			'driver'   => 'mysql',
			'host'     => 'localhost',
			'database' => 'database',
			'username' => 'root',
			'password' => 'password',
			'charset'  => 'utf8',
		),

		'pgsql' => array(
			'driver'   => 'pgsql',
			'host'     => 'localhost',
			'database' => 'database',
			'username' => 'root',
			'password' => 'password',
			'charset'  => 'utf8',
		),

	),

);