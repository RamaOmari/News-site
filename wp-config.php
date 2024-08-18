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
define( 'DB_NAME', 'task2wp' );

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
define( 'AUTH_KEY',         'zNqWp7Fk-(aDWH/2m|NPyRW{o5;(t|,LiSEH/?&).7/5BXvLhZ]Kip0aI1$~+>$_' );
define( 'SECURE_AUTH_KEY',  'wu&AcmGHNL0Yj+1kf<CRmI0)!T.[u46MQrHo )o2KKES%~sh#lU_a;(oR!`3A%Wr' );
define( 'LOGGED_IN_KEY',    'L$M/4CI8<_fgF>Z<{>!@(%d&w^f,(ARD6R^);kmd5&d5g<.UJaMzyME&rr0x4hx ' );
define( 'NONCE_KEY',        'qjC(dho`4:-&;/m8y7&Ao`To.XXNOb]LkIA7,z#gPTUQi{eMR#C-.#*9/0[NN:Y3' );
define( 'AUTH_SALT',        'R`77jDCwzi#5#w(i*;([M:oE@3v%(Th`5[MDn8qeW~stW`L}.|0(u#KdD.Wd]B:T' );
define( 'SECURE_AUTH_SALT', '7L&b[@zbq-5;Y%GR>{u|y~#gHVFM.CcVDn*]d]-Y1RKztIrf;^NgP,XDrqF1o(t{' );
define( 'LOGGED_IN_SALT',   'a)( bY{TmT`5%`}Q-c+MBcH0.n=|g!8<w}^zfI%2Hl`?E3%4X*^L1#(IEXSY>B*:' );
define( 'NONCE_SALT',       'VWjPK$*1M$)SO0r9(0tlnLA)_m$TLiL_;)CNC.`ux!Lj&~UZ:1~/A/``wh8B7e1]' );

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
