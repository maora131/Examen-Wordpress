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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nuevo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'KPyOADIHcY5fhfJjtW6mVlNCx7wmveuNPmpzbbwXazIrWH1SGbIEk5nENdWKeiW6' );
define( 'SECURE_AUTH_KEY',  'GMhYjU3OyLDHIe1tshOOk9gWbxb7oW2GuHOizMrmSkOKejrD5U3IFwHjlsZ63E3g' );
define( 'LOGGED_IN_KEY',    'Z8bK4fvHPpkeJQBarstSNsYaueegeBc4Tk8H4AvmxWtDbDn1IEnhKJgTY3ED9xpR' );
define( 'NONCE_KEY',        'rCNRMOcDnlZJCymYFGUM19BEDCbjkgI4mnsHv7xXdkKndMGX4EYdoLgfPNp8E3HB' );
define( 'AUTH_SALT',        'zwzrTYA145TLFR3TlrXshbC8hRxwWcfhuD5whlC6WeX8ZYor5tb9boJ3QDbdAI8y' );
define( 'SECURE_AUTH_SALT', '1KLJYCptglJKpl33xhxP2Xv0AtGw60rLLJIvZYCrHHnzWPR8tNRN7E5njM9cnDoL' );
define( 'LOGGED_IN_SALT',   'zhkjFPAMGg07fIYGxKkGmdKBzDXQ3Vk0GMbzimpgsBTiyKPhCw0mFnb9LFAlVrev' );
define( 'NONCE_SALT',       'vLZJ0OUBJ3hCkIIPW6LYrY4kyrB7r8ceyE7Ok1vxfNDTbPjS2qeCarx90KsZHVGM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
