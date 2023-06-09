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
define( 'DB_NAME', 'wp-training' );

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
define( 'AUTH_KEY',         '?)Y/57fUh+&62NQ+KNzz6LQiQUcabKYq *p=d5{r[Mrc1(+=|BBmRnbIp/gRr%?7' );
define( 'SECURE_AUTH_KEY',  'b_2Rfm]V]YhXgp7/$&h^>m#/q#ctYu||PFsFnf>%{<g&LLrj`=~OHCA6=T53xWgN' );
define( 'LOGGED_IN_KEY',    'zuM$A^J:xkV/~pq<vC;~h3lOyCo?A7?PPp61QpWG0~obY,GyLhg!pC}tPcH2aehy' );
define( 'NONCE_KEY',        'uB6SOKqUuisXLbtEQDV$jAisIxByERUectw5EA~@Cm)]*axLU8Lr[j5L<6%2k$q=' );
define( 'AUTH_SALT',        'hKI4!SG=<4t^l?[gNSzUJE%0z4VbA[s)%Y@=)#q~<%?vzcUs7VH11PHQNh3=#9e1' );
define( 'SECURE_AUTH_SALT', '<d&>FGUiY H+&}Z`<`&A>@svI)28<6[|J[C)`Cz^]Ol!*r@_Cw&SmhKW#Uwyy5t8' );
define( 'LOGGED_IN_SALT',   'Q_t.#LE2i/ctP+y]jzT)rrDtU@umlX.{!-?~q9r}o|-jH8 ,uw&k,>6ME*Nf-NTf' );
define( 'NONCE_SALT',       'hM89(KxMLvN(Z4%2u#Ll42;gahhaL|H?~wjkGeL**Bh#{]@qOet~ap6x18~nv%yh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpt_';

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
