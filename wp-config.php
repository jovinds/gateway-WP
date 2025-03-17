<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gateway' );

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
define( 'AUTH_KEY',         'Fslz5xKR5tapKkT7bOUnRgf84xlAYEAoBNvqsiPZOw9U8NIcrWblsKCHcRtfrDuQ' );
define( 'SECURE_AUTH_KEY',  '3TPxVaVvQ6ucTzoU07BTgv1L9HTf71UjwBigTs4qRJ2gDCXfRMsISdYDK4oSRB7u' );
define( 'LOGGED_IN_KEY',    'hs2YrwJzG4FyjWuhTJn6oiABdWl5U6c8zVJx7NkwO6040TFYx4nZsCwOsG24zzNw' );
define( 'NONCE_KEY',        'RaZbkYOX7fbtbH0uAQem0GDQ9GngHnQUaBqtFtJXNm29gB23wEqu53ETR5rVPtKt' );
define( 'AUTH_SALT',        'vwCw2JAMDKtzCUhXcLbnbPSOnIYBp6O9Afws22wCMmWlcP8knXMWwa0GLk8nsOtF' );
define( 'SECURE_AUTH_SALT', 'j2YdHJzDrxJDTcAx4JVeXl34sptQnN816jD1lhhTM9sqdSBdVwnLw77fTJSLwM81' );
define( 'LOGGED_IN_SALT',   'oZnyYx0oIew57tYKXlDp3Jv14l1iqlqohKzdeYLfO9EDZOYbVIORJjf1e3ehLgf1' );
define( 'NONCE_SALT',       'vN0XE1zm4zH86XCzjmTYhZzNNpikV6pvTFJVvCrIPunqavdhQLTqQS67OMbAHsLC' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
