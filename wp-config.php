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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dodo_page' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ',</3zSnobA[m+~}g~GWb>c<3KN+K`&XT0[S:97Yg%=kY-u|lER@}cUrUmrQKs)vP' );
define( 'SECURE_AUTH_KEY',  'r~?Jq>MSfkM!}[k*7Z2#W2352vMt]jcMq|`2[Hz;8GMGTr(vKGx;cD#A|yn!0wC!' );
define( 'LOGGED_IN_KEY',    '9Pq`*L:Akq?. B.G70t0i<2w!?r5XZya3k)Bu|60;wb+YDzu Ew~zIr+|wFQi|QJ' );
define( 'NONCE_KEY',        ':%%Rx1|t+s9Ok2ZG|7z5W@$v*2{ie}2*rH:VrFalHV]z@t#)-vX^EkZ {$!!no3D' );
define( 'AUTH_SALT',        'SUmnllJuj@.t=aJdl+}v_@l!6E*b3[--A@jL^Iz@3S)vNo@!4UCB8gCV/CSs+Xu(' );
define( 'SECURE_AUTH_SALT', 'S$ 1P<jcGr5?6g+8=Z]8kis]AR)O#|!Q]s%6t7~Zb+;%ej/Xg>.*hF2,E]cxVBV#' );
define( 'LOGGED_IN_SALT',   'qS~5C]3j-S>~p<].d,i]&ab-h_~UoBtFh)cHdF#7S-ga(SBve?Wf4fXBDDe BO82' );
define( 'NONCE_SALT',       'eY]D*3ZJR&#a88d$-|Tx*e^U{c[(`:b1m<NEf|ZEO;JHZ eqtM/XB> #U-$RV>]{' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
