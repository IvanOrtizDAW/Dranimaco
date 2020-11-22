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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressGitHub' );

/** MySQL database username */
define( 'DB_USER', 'workout' );

/** MySQL database password */
define( 'DB_PASSWORD', 'workout' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E{J4n0ZakJ3lxry8+kxyRX@|oWc}qg$>&+aJ3!D~2de P[0f}:>PY^wwDHT-/lL#' );
define( 'SECURE_AUTH_KEY',  '$tD|:|9OO+k?a8LiwqB&_iF}Js-.j[ pRaT8s$VJIRnt,?`U?Lc}rCP_2Ahy NkN' );
define( 'LOGGED_IN_KEY',    'FB#-_$5P1rTC)$!<v2bk T4o4BfkAtt3:e2y6^}9c?^IlJpI#PjcxqrMXK`AHt&w' );
define( 'NONCE_KEY',        'Un;+Ws$>#P[`cHUGmGv:bvdajQ3-33)@B`ZPzUGxm+{+6B}23w(8hzH?lTece^.E' );
define( 'AUTH_SALT',        '[Xw|TUT G_^1Qbu (-($JES)L9@h*m$SS{dkb|C<OUPh6g1RG;NU`hi{R$M-&?hO' );
define( 'SECURE_AUTH_SALT', '[mJEb#Sx^Sn8!u%T`6<t*eBgY+;|gjVZftq|B>,ZeIS64c_>:vVHxFL91I`w;GXc' );
define( 'LOGGED_IN_SALT',   '#FftJd<b(2MW3E^`#gml(H|[<CXL?dhph$ctVq|AwP(hsyY^8y- LXcA[uayinz@' );
define( 'NONCE_SALT',       '15_Zvp$=a43nrcM>.m8&A4UScPopF.taCcSt/*M9%s0/JCz[K<K=<5bA1g`?DZjA' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
