<?php

define('DB_NAME', '#{db_name}');


define('DB_USER','#{db_user}');


define('DB_PASSWORD', '#{db_passwd}');


define('DB_HOST', '#{db_host}');


define('DB_CHARSET', 'utf8');

define('DB_COLLATE', '');

define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');


$table_prefix  = 'wp_';


define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');

define( 'FS_METHOD', 'direct' );

?>