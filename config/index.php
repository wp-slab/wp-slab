<?php

define('CONFIG_DIR', dirname(__FILE__));
define('BASE_DIR', realpath(CONFIG_DIR . '/..'));
define('PUBLIC_DIR', BASE_DIR . '/public');

$dotenv = new Dotenv\Dotenv(BASE_DIR);
$dotenv->load();

define('WP_HOME', getenv('WP_HOME'));
define('WP_SITEURL', getenv('WP_SITEURL'));
define('WP_DEBUG', (bool) getenv('WP_DEBUG'));
define('WP_CONTENT_DIR', PUBLIC_DIR . '/app' );
define('WP_CONTENT_URL', WP_SITEURL . '/app');
define('UPLOADS', '../storage/uploads');

define('DB_NAME', getenv('WP_DB_NAME'));
define('DB_USER', getenv('WP_DB_USER'));
define('DB_PASSWORD', getenv('WP_DB_PASSWORD'));
define('DB_HOST', getenv('DB_HOST')?:'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix  = 'wp_';

define('AUTH_KEY', getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY', getenv('LOGGED_IN_KEY'));
define('NONCE_KEY', getenv('NONCE_KEY'));
define('AUTH_SALT', getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT', getenv('LOGGED_IN_SALT'));
define('NONCE_SALT', getenv('NONCE_SALT'));

define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_AUTO_UPDATE_CORE', false);
define('DISABLE_WP_CRON', true);
define('DISALLOW_FILE_EDIT', true);

if(!defined('ABSPATH')) define('ABSPATH', PUBLIC_DIR . '/wp/');
require_once(ABSPATH . 'wp-settings.php');
