<?php 
/**
 * Users CakePHP Plugin
 *
 * Copyright 2010 - 2014, Cake Development Corporation
 *                 1785 E. Sahara Avenue, Suite 490-423
 *                 Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @Copyright 2010 - 2014, Cake Development Corporation
 * @link      http://github.com/CakeDC/users
 * @package   plugins.users.config.schema
 * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
class usersSchema extends CakeSchema {

	public $name = 'users';

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $social_profiles = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary'),
		'user_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36),
		'oid' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 136),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'index'),
		'family_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128),
		'given_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128),
		'gender' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128),
		'locale' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128),
		'birthday' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128),
		'picture' => array('type' => 'string', 'null' => false, 'length' => 128),
		'provider' => array('type' => 'string', 'null' => false, 'length' => 128),
		'raw' => array('type' => 'text', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'BY_USERNAME' => array('column' => array('user_id'), 'unique' => 0),
			'BY_OID' => array('column' => array('oid'), 'unique' => 0)
		)
	);

	public $users = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'index'),
		'slug' => array('type' => 'string', 'null' => false, 'default' => null),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128),
		'password_token' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'index'),
		'email_verified' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'email_token' => array('type' => 'string', 'null' => true, 'default' => null),
		'email_token_expires' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'tos' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'active' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'last_login' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'last_action' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'is_admin' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'role' => array('type' => 'string', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'BY_USERNAME' => array('column' => array('username'), 'unique' => 0),
			'BY_EMAIL' => array('column' => array('email'), 'unique' => 0)
		)
	);
}
