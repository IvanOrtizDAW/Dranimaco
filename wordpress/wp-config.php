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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'IYU6&;WHD-`/.O-S.9q|k&NHtw=*WHL>s[eh+N<V=^}*A 5*}.F#J=3rLL-P.a[e' );
define( 'SECURE_AUTH_KEY',  '=tM/&b-^^+`jQ}][)Ih[HFQIxFhoLCe{Gz5/S@Cocy+0RXuo?>O)mR6uq^>wOvTD' );
define( 'LOGGED_IN_KEY',    'IHBc0.3$OcSmxj]R3[*nC+ZFLA(pg+P(PA{W|2qj8B__<*iD?UixO(6SYBGhz5du' );
define( 'NONCE_KEY',        '*rR[i*B[62{N|+^!dMXnli(5ORz >by*ej*s7LBC(ii-H4k+[#XE/<cSEdNwl9mh' );
define( 'AUTH_SALT',        '231E5eYFV=3Bu}GTegzM@@)C$&Bxf99)wuH$.nsJk@]=n~q8SiV`Yc4dPwjXa@sH' );
define( 'SECURE_AUTH_SALT', '|mx^8F7|=EdQb0ne+/Dc$T(DsJR1`]:JpTyJ`^Q*)6-LZe*B4$PT`.ejX43gqary' );
define( 'LOGGED_IN_SALT',   '(Q#lfTSl&}VvXP87U;*>V?7V>_Poyj,n~oKC#Y;Z{)w}Cna*rQ$e)gZ6VSI_969i' );
define( 'NONCE_SALT',       '#30i$`,dB[uWpY]`.bSgGMHkA_]jCh[_#ouog3o6TyHB_Fye2.,AN&W@^!%KU:eq' );

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
