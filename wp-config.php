<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'iVTHA5pkeT/ktBbIIQMj9F+WAFfQjml19fANO0wbdQPSafzjLVPAJKJNdz0VIEpCNQuhLzsuS548jOar92+UVg==');
define('SECURE_AUTH_KEY',  'Im7vctL7fbykDw27rLnZMVhcPYOqaISMmp3f8LVXgwwyTMOTny9vPoUp5tSe9mu/s9cnILw+4dLavbcP1ACy2w==');
define('LOGGED_IN_KEY',    'aLLPJHoB25T75QbdDgCDpV3DDtJHYlKPJqgHX0bmjAEk7QfKG3ppWbTVWvlodoL/DCZQmdF7HB7YYmlwxEhcyw==');
define('NONCE_KEY',        'S5GH6RqZ55yMKseJ4b6/8Ab1RU1oLTP4h6Jnd997NMWQVUxfUAI7cx4TEbkgXB5/tVn8r+2bgdkblF0T6ZewdQ==');
define('AUTH_SALT',        'kLSk31WWOEj0LcnUf97hgAaofKsYjwCo+zzUrJKLO9Hw9dmuLR+pKGFrSWmaY5p+m1X79/HpFl996mZTjkgVGw==');
define('SECURE_AUTH_SALT', '8M3jFUKg6s8rmXiKL8hmjeTQZjhq9ieCRKrbg/8P33qFAIveCzuaZcoSlBV1K+MXp8cXMqLBIwPQBrOQzxJGxw==');
define('LOGGED_IN_SALT',   'A2rYnJgkWmnTJBeBrcGAAJSU5qPj+3/9PG7G+y+QjOIOPXv5XWxhCcBvbgPt6ow5x9LJ1sIDI7kGZk4QuA7dxg==');
define('NONCE_SALT',       'F5uw7/5Y2aL6s/k9bexZl6LpwunyMq7LG3HDd+4ZzOdbpn/S31LDBCE0ZZU6Hf3n20SSiHtyKDRxTSTkb1FE0Q==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
