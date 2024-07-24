<?php
define( 'WP_CACHE', true );

 // Added by WP Rocket
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u992190895_cejLM' );

/** Database username */
define( 'DB_USER', 'u992190895_otYtI' );

/** Database password */
define( 'DB_PASSWORD', 'I8hDUWA6ty' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'Hg<fWOv:6;N.fvr,A`TRj/L9^6Ie*!KDqR@Jmf(;hSw8r@@m sG.>Ys!;xiSM50_' );
define( 'SECURE_AUTH_KEY',   '1z<#JB<z|H/I^|dSyJWUfm._V*}|Kew.@s;&:CeW)#mHfuym&]FQRlj1PV7N*?Hr' );
define( 'LOGGED_IN_KEY',     '4tRU%6;F_(Y=lv[.CBwQ,VreMP+ZS-5-/t,Pz}CUvR^X#gMr^0UfnB^8Nwo<@ddd' );
define( 'NONCE_KEY',         'qSt^Toxswx=f&L~ %aaK-}/.a%HPU(Sk6l4J,Sa)gVWl(AT4-fQ_#xJe[nt0~cWo' );
define( 'AUTH_SALT',         'Er9-(:~Q?zHqJs-/t-OVA-|%o:oX2g:o+L0557.W >E)!my/e[vn6bw;?1xS]@)>' );
define( 'SECURE_AUTH_SALT',  ';K,z-fp2E4*6{qY%&5`TSr`Is=WIm&-Z:CQFK@Q]Y0s==#=#+^C?w0,i -6W_D.o' );
define( 'LOGGED_IN_SALT',    ']WN,~HxfLMWU#/sdYG9tP42<0WbN4?_+D{[I n #x|KLGThg;GzsbY Azrj`n0~9' );
define( 'NONCE_SALT',        'x6k/f>t<i%sM_P:C8LRA`tFWgYi.k>8Z@k~(v2xE(P|CpP=oN_ZNd99Om<.k|uH#' );
define( 'WP_CACHE_KEY_SALT', '[8NHrXpwvBFxVa<%@L/j[K}1+lTIPy33*&9/e%^ygph}iDn<y*]tKe4#z:,{>2bm' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
