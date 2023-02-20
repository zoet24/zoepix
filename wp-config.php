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
define( 'AUTH_KEY',         'JtyO`h*&ZInTb1[W4|6kUJ-M[!zUk/lBZu?;%G<3X:+1K%c0/1`k{feCoito(}|J' );
define( 'SECURE_AUTH_KEY',  '_M_`&~PS0q6pq/;<QBe@y*xJ&h[ygZ;hB]nk=$t&26?V2CX}U+/LQ@*A&hX#R./:' );
define( 'LOGGED_IN_KEY',    '[S#OPA8+UhvLr(W]]rU:AVn}s(M0loz<WMG_CUKY0O^OU h]6 ]f<i;+L%Hv^dTF' );
define( 'NONCE_KEY',        'Vm)0LJ7()KPBeO)@l]f7JwB8fQq7WuqKaX-8S-mt*KvF|oA$MrPwG1K_9#&MG#{m' );
define( 'AUTH_SALT',        'ZGg(9pv$<y~@*~.M~*wj/)W4n{wir.1Ee]t=y---F)9>EJGJcD9r@)):ti^[j0$7' );
define( 'SECURE_AUTH_SALT', '~XZK&+|CKZJ7k-3H?/gc6ee+S]V3v7 o8_+`PfD?:C6^@;e]5M,37Ppj<}6qt6Gx' );
define( 'LOGGED_IN_SALT',   'rF.+=OyLqyU-uab;eY0z{l*F1GkpEji6l|ml ZDuEf)tc=;6qBCOAdNdH(%L4z/_' );
define( 'NONCE_SALT',       '2ggnx?7Dk_xN8,Li(rd&(!:0vZU 7e`OeZ73kl_bKlC!8Sqo(C?(3KjM[;l03VT)' );

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


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
