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
define( 'DB_NAME', 'haicer' );

/** Database username */
define( 'DB_USER', 'haicer' );

/** Database password */
define( 'DB_PASSWORD', 'test' );

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
define( 'AUTH_KEY',         'g2I}<>&E{cjE%PN:EiHNsM&7Yl,xTgx]0,1&A~dvETb+2%*(]^a3tQBcIbl7I9]l' );
define( 'SECURE_AUTH_KEY',  'a=qy1U_1}6Nbs0K~>w`mnSM]M8F0!=l4K9-*yVX9:Irk1LR>7Qk}/=zNUK}_6T[4' );
define( 'LOGGED_IN_KEY',    'fm3ek-okDfWT{.Ri7|M]kq;c<g^?N%rP:v[,n$2Xm%*!4JQ|Lq0+4}/7|{VvNh2f' );
define( 'NONCE_KEY',        'n=;CH_dx8fZmib_Ed!^E*c<T0Czng_FXbVl%,vV~T0T[U(rMCi3Y*xVR(6*SYvc3' );
define( 'AUTH_SALT',        '6rip|Og|8&q{cFGf||<-9.X_7Z6>^0b]qs1xa#Wn@AZ=I<G1625,][284,{(,(2`' );
define( 'SECURE_AUTH_SALT', 'QI8B)R1(b~v}`*e# N@1U{Q5jnHXr#)_YI4{qA~b?BuY(vQ`;FQWlYg%rKh_7?-a' );
define( 'LOGGED_IN_SALT',   'Q0y!* UzH8_lr.RnKh&jX{o*ke+OP`hnQ`Jul&^Z`C[=.>4k$%3xfCR>&xf7KA##' );
define( 'NONCE_SALT',       'Q>9fpVH_>5/^d~#v,Zs+(zH;[s@tXM|^EsUq=ELRs.}(mLw,ya$undbuKj6}]JX7' );

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
