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
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', '' );

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
define( 'AUTH_KEY',         'I.zSb0^7kR*3r6%^W9UeQm<#~/GhgG~YG=5}Z1ip09VT]K41;[x.DF=wKQEYsi5Y' );
define( 'SECURE_AUTH_KEY',  'IAmM5S^Yd`&*fxOP4oT!cGKzZ`{c#*QlhE{$XnVzU`%Hk_sT=l13cV1mbC3w6hy4' );
define( 'LOGGED_IN_KEY',    'M;cSv6%d(PJSHv?se@9A$X%h$u<gCUt3.dnN+qS~75x?>tun<|Y,Si>|;^Xr:HCx' );
define( 'NONCE_KEY',        'Sdmk}1U_,<_<j&*j.O97W_+;}WhGRQrfkvK4{;~89)n0b4uPC9UE_&2jQFj 5?/R' );
define( 'AUTH_SALT',        'S64u!*UQEJAIT}zYqwd/UTD0TYZ k]wMkkq>]r%6D,tkP{)ivobP-0pz{=^J-L6H' );
define( 'SECURE_AUTH_SALT', 'rW 83xG?0TYCG-9ZdiF68o8vkS$}iq%-<)$F[WM:4<^OyoB>fSAK5-xi/.m.WCly' );
define( 'LOGGED_IN_SALT',   'aQfwsaK@(!mmHl_>Ce7&stw}rT`ADFx-5+Xw.6?>]G#75S^Ywl)S-H4B2ZJs(p6.' );
define( 'NONCE_SALT',       'R{ {7PKv}l6~a.]01D1-qQ`r2JxW7 rO{|8u.Ml@j0+$+Vs;XG3itd5d@?cmWA4~' );

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
