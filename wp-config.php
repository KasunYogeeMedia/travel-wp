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
define( 'DB_NAME', 'travel' );

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
define( 'AUTH_KEY',         '<!<s)2485#>Sd><bYhqj>vLR@P~@0`5KksPEdJGOijw)^G.S$QE>O30m|QHf}$y}' );
define( 'SECURE_AUTH_KEY',  'a`|(@&`p87:Udg:eKqE)FRoY;}0{x4qq+4s7XM<p_)PjQZ x,7SY6uQ:L{#y#p1j' );
define( 'LOGGED_IN_KEY',    'f}tC.X^^?EzB)O_6zO9ad{cNxKF~s,J.`p<J5}({Jb8~d7xTr%;T+HUa`XVo=lC<' );
define( 'NONCE_KEY',        'o0iFZ>T$MHfm^5wjD.?;&{lMl.UY;K<<I> 9HXUdWS::r+P[U-}&JW+;RAmxcmkA' );
define( 'AUTH_SALT',        '<U^ZXZ.3?;#2@!Y8K%Ir`!?zf*4xXKyhhHlrT3Z[Mz|eMmHC2z:xB)G9WUPQoC(F' );
define( 'SECURE_AUTH_SALT', '9:@8~v16~2 [Q>-~B`4lnWp]5dhgv9$,M-A&T_dktM^=F%}sx.bI*[`b6x6Z:2D|' );
define( 'LOGGED_IN_SALT',   '*+dOB#aJg!AE2`h#lzZAUmX*fjf.:YPxm)EB+7_1qStPebL@,7YTt6 ZH}5}^U,X' );
define( 'NONCE_SALT',       'w5)PNLlGB*c@`8e}KBX:3cAz@u^Ca c)T6M|.z_MY]gd*|{{]bzU>{%.kV9I:/@M' );

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
