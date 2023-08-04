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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\api-wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'api-demo-test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

// PjpeDSUp8tYzgAzseue8hpOGnwm18X6p!

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
define( 'AUTH_KEY',         '<7IFjH<T[x-kV67;|fhzx1/fhdqDK)cqn??0v*eZ!8sLG8=NP9#x$nB!K?~YH_.g' );
define( 'SECURE_AUTH_KEY',  'cDR6gOM*e7I[?[9I-Uk*[y%U]QdS,@eQz13?w=d8<oA0Dn:-$a;~vW0A$mA/;ugM' );
define( 'LOGGED_IN_KEY',    '.jFz_h*#!!~<G^8O4b@dP4`3_>.M&qX#S4>3|4c}O}>315J0wQYeU=21My1=/q R' );
define( 'NONCE_KEY',        '8Bf{Y;1aabLV9xn^%/G(#(O0rGfz$rJGDk`wWn&mP(=g,D*=kptSF8MJh}?y~R96' );
define( 'AUTH_SALT',        '3k:l(UM/]sGdHk.dK~z<N;tL:El!Z3Jy@d-dPdcuM6uzY`b@<IozV<NG^C/vY( X' );
define( 'SECURE_AUTH_SALT', 'D3UUP4zj(H<7x!yqgY(6z;;QO/o4Puo/(<Hpqw2}{DcL$haycU#2+Pai;L_3MC(s' );
define( 'LOGGED_IN_SALT',   '$z,_kn4>YI|t!7Mxrr8luqxU`DlJ&/%Z@(;A(p5xTlwtTctI20VfJN@@iT<HP3xU' );
define( 'NONCE_SALT',       'P{M%_/+5CRAYy9j#!Xyo[>YZ?jS$lGj@;vRXLTmOE>mr,G%Q ]31|W.r;hn/((Q%' );
define('JWT_AUTH_SECRET_KEY', 'ZmNVBsNufGVd6FMObJZTcM5yHr73iy');
define('JWT_AUTH_CORS_ENABLE', true);

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
