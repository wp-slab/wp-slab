<?php

define('CONFIG_DIR', dirname(__FILE__));
define('PUBLIC_DIR', realpath(dirname(__FILE__) . '/../public'));


define('WP_HOME', getenv('WP_HOME'));
define('WP_SITEURL', WP_HOME . '/wp');

define('DB_NAME', getenv('WP_DB_NAME'));
define('DB_USER', getenv('WP_DB_USER'));
define('DB_PASSWORD', getenv('WP_DB_PASSWORD'));
define('DB_HOST', 'localhost');


// https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

$table_prefix  = 'wp_';
define('WP_DEBUG', true);

define('WP_CONTENT_DIR', PUBLIC_DIR . '/app' );
define('WP_CONTENT_URL', WP_SITEURL . '/app');
define('UPLOADS', '../storage/uploads');

define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_AUTO_UPDATE_CORE', false);
define('DISABLE_WP_CRON', true);
define('DISALLOW_FILE_EDIT', true);



define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');



if(!defined('ABSPATH')) define('ABSPATH', PUBLIC_DIR . '/wp/');
require_once(ABSPATH . 'wp-settings.php');
