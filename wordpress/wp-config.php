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
define( 'DB_NAME', 'maindb' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'satya123' );

/** Database hostname */
define( 'DB_HOST', 'database.c778g15hy7kg.us-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '?t|RwxkD9-uV|M+}W8T9452UkAL>S@Gk2gxr^E`wlk#xpL>P^yIbAb({F% #1:/y');
define('SECURE_AUTH_KEY',  '}|+&W.g+phvz<Jt+bZk|6K}557[K%C*)gd+nPZZBq`TCYD;70}*uBw$j::fRR,xH');
define('LOGGED_IN_KEY',    '.v%Z*qSL2`4;hw[V[t$Gu)7G;KHjdc=7l6M*PfPtq[Mp~t8+X!!ST4ieB@E0wh7G');
define('NONCE_KEY',        'pPS.hE69%+n+0* Y~ W{RfQ.^$Uf]#d8KHM9FH|Afxa9TLeqS8-8.$dGe1D!_(um');
define('AUTH_SALT',        'Wq$A<f-|l2XQuxkHdfxrDusfJe)/F?@HSGOB^M(Ep7&qob#x{DmPm_:|.JH%g+d;');
define('SECURE_AUTH_SALT', '^Yiw%duIGPe$VUf[y|0[=-+JO}`H;5L/Y|qpP!yFW=Y~#<:bP)M>Scb-TyIs5VcJ');
define('LOGGED_IN_SALT',   'F@F!IVplB!Y|G]W=]o>._F=k>|fl>idNZ1U9|FoP3KeX,.Bb3R]GQ[+vMZY_7y%w');
define('NONCE_SALT',       '1</=B.a7dy!B|*&2=iWx+Y_d<)HkFtHO3L7lv&p-|bTsxg+;4Pja|zg7v+I=ajSC');

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
