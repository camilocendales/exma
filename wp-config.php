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
define( 'DB_NAME', 'exmacom_exma' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'BK}!l=yw#(i5,yis#zQ!}%:* KIMn>9FSLu>H@n]9S^&uv&lIqSWnPsmiGQkl]QD' );
define( 'SECURE_AUTH_KEY',  '6hEdHv5|:2Zv~OX?)<u#8?q5os!:?-uC;4Z0#y#.,nrVN]qBGOo%g[Ri<Rp-T9gV' );
define( 'LOGGED_IN_KEY',    'X[([/u[PpPJk@Ks*zXunY_T&7lA5<x}rK-f*.b03MX&N0b=A{[x`ly&.-X}!a]|c' );
define( 'NONCE_KEY',        '(Ln`jk9LY6L)_>$!pJji9qaBvpt[wVU-WOHyBzGsQr#h`sdzA^Lhd5REfgZlA0p`' );
define( 'AUTH_SALT',        'QLCJrR8++:>*6$I@Tr0DoP[+z-m;Vg@;|+F1gB=o^;%{A)(K94{JHao1t^+Hx7@^' );
define( 'SECURE_AUTH_SALT', 'iTpLk%OR>4r?ZRh^d8,Lc.iD+B7!}H{q&fu v7ay=,87C>SEM1uqZk+Z)}%?:Wk{' );
define( 'LOGGED_IN_SALT',   '! [W^xHC7~_;9`#An9rj=owO/E+!5{uOE?7vdccVUG~133?Uy]fu+ebg&<l;vMy=' );
define( 'NONCE_SALT',       'ypoR[[76H|U^}2jN{}_nPq`NSg6p~uG,8XeVK/4Wnk!`]zF2z#mR8e4+?]7! 63;' );

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
