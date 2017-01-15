<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

/* 
 * These environment variables are required.
 */
function require_env( $name ) {
  if ( getenv($name) ) {
    return getenv($name);
  }
  throw new Exception("Server setting not found: ".$name);
}

/*
 * Custom config to make Owain's site work
 */
$httpHost = $_SERVER['HTTP_HOST'];
if (
  $httpHost === 'recoveryguide.co.uk' ||
  $httpHost === 'addictionaffiliates.co.uk' ||
  $httpHost === 'routetorecovery.co.uk'
  ) :  
  define('WP_SITEURL', 'http://recoveryguide.co.uk');
  define('WP_HOME', 'http://recoveryguide.co.uk');
else :
endif;


/*
 * These environment variables are optional.
 */

if (getenv('CLEARDB_DATABASE_URL')) :
  $database_url = require_env('CLEARDB_DATABASE_URL');
else :
  if (getenv('JAWSDB_URL')) :
    $database_url = require_env('JAWSDB_URL');
  else :
    if (getenv('MULTISITE_DATABASE_URL')) :
      $database_url = require_env('MULTISITE_DATABASE_URL');
    else :
      throw new Exception("No Database found!");
    endif;
  endif;
endif;
// ** MySQL settings - You can get this info from your web host ** //
$mysql = parse_url($database_url);
/** The name of the database for WordPress */
define('DB_NAME', trim($mysql['path'], '/'));

/** MySQL database username */
define('DB_USER', $mysql['user']);

/** MySQL database password */
define('DB_PASSWORD', $mysql['pass']);

/** MySQL hostname */
define('DB_HOST', $mysql['host']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);
/* Multisite */
define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', require_env('MULTISITE_DOMAIN'));
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

define('ADMIN_COOKIE_PATH', '/');
define('COOKIE_DOMAIN', '');
define('COOKIEPATH', '');
define('SITECOOKIEPATH', '');
define('DISABLE_WP_CRON', 'true');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');