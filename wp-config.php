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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rawlelite_lite' );

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
define( 'AUTH_KEY',         '>qFCq)Sut%:V8s9v+^!rdWmpX(+Zv*7m~N+-2lRinP7b|c[P*q4Z/nI~/mgq6z0-' );
define( 'SECURE_AUTH_KEY',  '#ofy)Hd:RmoZYgJBueoSZJTB*llY_>75KTNL5+f:3x@t4b(4BoH=( ,&J#yt3O!g' );
define( 'LOGGED_IN_KEY',    '_+L_.=JacGu0q[p.g:haOSb&yM<XIf[`;wbz8J_rOKQ Kdy1Lg5%xin#j/80Poz~' );
define( 'NONCE_KEY',        '13Cm`5PNe#:cC$rI`]jL~!o0ht%`68[cH$J9Y_@er!)zr.TPryJ.ldHtOlGbZE1w' );
define( 'AUTH_SALT',        'z_S2|$IU*gJYN0p$Ho%K)skHMs9S/O]$ssuc$YXDnxf!w 8K</$`@86fx=@j+)40' );
define( 'SECURE_AUTH_SALT', 'j|qbA{ /eC~x@)#A)yU@XyR^rw0kl&]}Bc~6L.$CXu28yrG6$V%ogQ{P/dj06(Af' );
define( 'LOGGED_IN_SALT',   '%p[d=WgBc<&PfiM_$ dqc$/!m_}CS2pdabKqxk>2nX`oo{9+.Q@1(Xyg`{,5!:C/' );
define( 'NONCE_SALT',       'r$_iQ*?oX4WLoXmh;LV~x^<IX<ltkzP_Z!7?G2^P3G#$3]s?Fvud<a_WYavR&0%d' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wplampp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

