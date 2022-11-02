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
define( 'DB_NAME', 'zoepix_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Vgp_hzPUtBB&tuj+t&Xv0+3=ZpELhTUZ*z1M9eJeB vraxH(E|Et<oXM2v7.uQGf' );
define( 'SECURE_AUTH_KEY',  'hvxxa@I[30zF3:sBiKTH+Jrar>GfN*R;8ImrFKgw[:IUd^dr*jvm1RBv1#~f:HjR' );
define( 'LOGGED_IN_KEY',    'homkgCoi`YB6Smr6 lH4f)jg1@EA$!F3J1jF&}29)y61SEpI;|6pf$s-%S}C=O >' );
define( 'NONCE_KEY',        '$me;HT[,Kxm#F[GkA1y_Pd$blo16JY$xSppG AIW4RA>*VPc}PUBAiWO~qP/#FNx' );
define( 'AUTH_SALT',        '!2(6ibFKH`~4:x_}.,e%QkoP,t5,+B/nV+2W>r,;3sMQ3@Ez9^2mSqbsBnXz EMl' );
define( 'SECURE_AUTH_SALT', '%b3=._Z&qNiDu}rpDwU-P49!e7e{?PR.WV=Xa%m0H5Zx:-IInWH@,(-QNEASl5k~' );
define( 'LOGGED_IN_SALT',   'i#C$!xa;Tx>///^nV^U[C|jSPoczcB4AQnwCG:3 mYSt3;NP[Y^vXy5;1e&y4[Il' );
define( 'NONCE_SALT',       '9,l1u-kcWsu^Xd&bl|^<sQ;<=JZ=3_i2_S;ev9Zz}[47/7|XiDX[UWz%2Iv2g4GD' );

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
