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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pragtechnologies' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'e64vS3dn5weXGMuyCLVNZIr3OIvLLc2tn8GMPIgo0xAxtnlSBDuOfAp4mYWBM6It' );
define( 'SECURE_AUTH_KEY',  'COXinCfvaMniWeK3BqsQRSY0JERtQhFUuS0D1Lv78Flb5urcX0EsoOp1iLEIUElE' );
define( 'LOGGED_IN_KEY',    'rWV4pr0DbcKHoJoneJVK2pnGC1dbefcGxioD8IK3N5HIapESqPTWBHTzggKLNNVc' );
define( 'NONCE_KEY',        'UX0459NsCqNznPsQTyjAzljNFSZwDYpt3noYSlRDsxkXGUdeAaZdMBPew12891gP' );
define( 'AUTH_SALT',        'a0YxWjxOF37fXoSXpwOP709VyMiNSiWbD3XHSnCo7vkch5EKbzy0zYVq5IXWF9S5' );
define( 'SECURE_AUTH_SALT', 'PHadKBcC9b6KcOP0cOdIehrzXPJ9vKvxPzHEFH5ARyK9CDvEYbitoE1yETLk6OTA' );
define( 'LOGGED_IN_SALT',   'djduJLhhOr6Xaf9Gmrl7IwhTb18NzQqywf9txCXyFP0eyNwkkkXIbFWPS2PSi7Nx' );
define( 'NONCE_SALT',       'GkquotU7fE0O0lca2gJVgre2fSS9YACl2k9Oif5akiNt5i7GtF4YmARu0L7eDi9b' );

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
