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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
// Redis Cache Configuration
define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

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
define( 'AUTH_KEY',         '/Dg <zCJFz(u(OFNK~gx::mvb4o/`)yV88sO_m HhC[:h~?g/JXtQ-y BWbHL=FW' );
define( 'SECURE_AUTH_KEY',  'k)b3?K{%^WhMY$a9)/X)1.T7l+Pm~{a3P1AzErJ|.|vU!CHIoMe;.s2=N_+@-tV-' );
define( 'LOGGED_IN_KEY',    'OXxpqRj/4IN:-Ua_+pY7vb}I#ZoOS6 h+BY(*&WQ y3/[>{{~9r8oaw|M;rXq65E' );
define( 'NONCE_KEY',        ').Zk7>G*MdZRJEG`Op1/i tH?iW)2IJ4tK,PP^*GJo$>KxcefbSH?.cC1$leQ:0j' );
define( 'AUTH_SALT',        'r*VPXA?_lX$o(4k>7jTw/( :*h#Ersbv<$@Ud|g!Hg`[IR9U ,tWL5EY.qzIKZt#' );
define( 'SECURE_AUTH_SALT', '?Fq }4B-Mb0?6)b7mA:!N:QFXZC*H34y0NI on@CN,jUtVnz2(Kwz^2tx*q[oWfy' );
define( 'LOGGED_IN_SALT',   '&Zb`=:n@u)-f,zhYcMFRUAU3U:e5xa3S52]V3nfFFOla0Q8u5I;D`$%:sz2Bd%]p' );
define( 'NONCE_SALT',       'W4b.SZt<s<f{ZE,Y`*5S5r|#O 292V0Z|]l:*QUpxX+_KFJ.ue<;[=sZLk,1jp[^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
define('FS_METHOD', 'direct');
