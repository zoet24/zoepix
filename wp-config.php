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
define( 'AUTH_KEY',         '/@8-u]>?[Pk.4GV(uv!]V&tG)P>9=I^R([y!^~@68~2--Uev4)d?rV+2CX>CHPJo' );
define( 'SECURE_AUTH_KEY',  '(W#iYK>6&r=9T!=PAn?5i]aFLdW~Xx3z+]enMWl{<2rO@.3/ftp[$8%Qe,9XlmxC' );
define( 'LOGGED_IN_KEY',    '[.XdUUZmB]btcI/H2sCTX^^ZKhuBdv%)!3.h17o?5d.[Tje[c)ns=n,rv ZdUv5A' );
define( 'NONCE_KEY',        'VQ@NTYQh;yg,HsW_n$jB;_n=|)k<NflV*x`u*.fm*Hrp+C-bB>jo}9;sP/c~&dv~' );
define( 'AUTH_SALT',        'b^`k9 y!,F<0cM;&aljws Z9T(T/y1[1yewqsyd`o&:PW+AouD|*S*bBzq3Sj2W=' );
define( 'SECURE_AUTH_SALT', ']yNmp-yc#l+gKW#^aDK$Xf)Q(@hjJ{*Y<SN 2e^<q]^H3QT3.I_O2{?UtqvHA#c6' );
define( 'LOGGED_IN_SALT',   'B=.b6f#NaCN+efH4]qvjymfb/hdz;+>:|IZpGwX eeftJ#LK>,+F)[~Ael{mSs%A' );
define( 'NONCE_SALT',       'CS_8GN]5,8 V(Z9DZ+EcfQN<R>Xr>Hv{{j<U!n=g+ntaP#[Ec 7/&QO2k#z9QNpI' );

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
require_once 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('API_USER', getenv('API_USER'));
define('API_KEY', getenv('API_KEY'));

define('WP_SITEURL', getenv('WP_SITEURL'));


/* That's all, stop editing! Happy publishing. */
define('CONTENT_DIR', '/wp-content');
define('WP_CONTENT_DIR', dirname(__FILE__) . CONTENT_DIR);

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/wp' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
