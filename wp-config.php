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
define( 'DB_NAME', 'tenksuxrmp' );

/** Database username */
define( 'DB_USER', 'tenksuxrmp' );

/** Database password */
define( 'DB_PASSWORD', 'RZZVb8MSt5' );

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
define('AUTH_KEY',         'mf(#-=|`o<3g,*QO^Z=YmEYlp0il(Tulau!F+vW7kNbu6#iN~+k~nKYC|^qwqj;1');
define('SECURE_AUTH_KEY',  ':HNn4jrP.AeF3lQI&49x<qv5xhD|4?Up-G_}e`U7wKm2F}.{L7KF-CdoAC]*)HB{');
define('LOGGED_IN_KEY',    'Jv?Ac/y}C8vkE7{+?fMQ}Jkq-x,uKK.g$9|.<:o5In=?W4n=075+,6lUO.T-Yf-K');
define('NONCE_KEY',        ';E}BMH!c|{=u;lix{?_])[m2y`hnx:u$(ECeCxH6POPm/Di^-+QC00EP*G(k*IU-');
define('AUTH_SALT',        'eO@)K!Kv|A=B/-?A2jxg}+UD$/6q;z*YLo<pVQ^@|U$A;|{QG,,K?Rg+D.{]j*&<');
define('SECURE_AUTH_SALT', '[)sgMKZN~q$y);&-A/nGe:{Kl$TgID*.+P$,z=)M$YuKi+P{:8 : i#<nsO[3TQ0');
define('LOGGED_IN_SALT',   'XgR[o{{#<[z=DwM<}]h2,>I(y|TEh3/.kKJH5|W,_-TAkYTSKWXc6lRZWtP]f)M?');
define('NONCE_SALT',       '+D;Jg~[kR?IM`q7BR>`H*46|-7[FZN}^OzZ (;Mrj iP[s_#_BHrx1gVc8V^_G{f');

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

define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
