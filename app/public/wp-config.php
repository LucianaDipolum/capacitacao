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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '?e0q<h<RAU>U]`<)M<~%|tZP*Gf3_ue]I!Owbg4ph}TyjP7[=xWxeF1@f*cbm:Zt' );
define( 'SECURE_AUTH_KEY',   ')$Sg(vTTh2o1nFG6:NesJNy/({Xq@I5l.^IO$M;S/MGm+J1;5Ni!vt%$_YP7iqz ' );
define( 'LOGGED_IN_KEY',     'SDZEx}wJ(1up%UY~F^5=WwGy}x;~xv<8>K*~il!@C[>+Rl6--}QN@t3V!?~FBb24' );
define( 'NONCE_KEY',         'd~;|l]m[kR~Lt~wp>yXQ:p(>>/mrxsU/9c+^DrS:Op@)FP~ qwg7;QwCngn{`1s+' );
define( 'AUTH_SALT',         '+nAN>qg@,f5o3rhrsWp~6(UbKWlg^+*b~b+yXJVrbgdc`vr:0`|=Dq<U}ln`@XE%' );
define( 'SECURE_AUTH_SALT',  '58OH,2#zU9WG#0BWoCi+D7K$9k)Em!Iw=}0Qk,A$+&iSB%nXb+BFgC{Kl_T+x!pC' );
define( 'LOGGED_IN_SALT',    ')$K$g6>7UN,gW!V<RPv#lju<-I,p~0~LdTRw,M/1+oNJ!{29.F_6Ivo<[Q?s;Yt@' );
define( 'NONCE_SALT',        'xW]B5X$k^ VPd]i(csp+NEL;K|q5oES#uXKu&jv6{;CVm}j.mmK,)AyT3LC[d][ ' );
define( 'WP_CACHE_KEY_SALT', 'JhzO&]yd F$8N:22QhSZlq*cj}<Q3[1Pi:C 7(I_#}g*XGvf]^[mb6Es298qZ@VW' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
