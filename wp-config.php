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
define( 'DB_NAME', 'db_ragistore_v1' );

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
define( 'AUTH_KEY',         'lB4Y9Sk!MBl!G(qjDCs)>tJJy5l@uSUzVias%,[tO-WF.mRl4mG3+hC$~+9u{Q@a' );
define( 'SECURE_AUTH_KEY',  '}@A%J}?PP%[>v:,Gbwln.b,V3t00g>U0<ZRNXWLG)%WPqC1>hZ,F&#sY+^akn#A)' );
define( 'LOGGED_IN_KEY',    'XM/5{`fhd9Sh9&T,~2CiQ0/}b%DtP!SGkG7G_@_Y%w=JM~IYDuM0jyl{vFaQJ BJ' );
define( 'NONCE_KEY',        'Ue9^ 6G8W54Lly9]g[-9}6&kySja&w<>#^EmSA#T=LF<x9C~p00!zL]Qc,A,B?F&' );
define( 'AUTH_SALT',        'gU~*WBRXvoVyj@EE%/Qx([4kF$)P3* kC_wR5fhK7=Hn_J}b TR=DydSA7)n[ZpM' );
define( 'SECURE_AUTH_SALT', '{~6FK%XfX,5}7R.m;Bi``m#N`:n+d_`H+~~ R~n ^~b/ds&0Pf<@UXZJeX(Z/rL_' );
define( 'LOGGED_IN_SALT',   'yRl_%= 6BaOOLIzWmW.n,W5LF%D1RHlq`+t2,.#PpnJ35Unrayu;/2:S<7lxd8mm' );
define( 'NONCE_SALT',       'Q]n^B^5R/E0J Y|l0.}oU]O?F|R@(;J},>cEQ3?:-7$M9Yg`PR|YLdFR_$q1`rS7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rg_';

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
