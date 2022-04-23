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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vegan' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'f>2T6r65l7j-A8.afrDO1y};dB!J5DzUr5axpjjl5Rl{~;Zj#r#v}c<Sk DB.Skr' );
define( 'SECURE_AUTH_KEY',  '/@kGVEB3bu-d6aXV<>JRcI u95pY^i4{Ou(Ou*u;a-t9_|$xJ,e^K<9v.CD5anVL' );
define( 'LOGGED_IN_KEY',    'KU3|mx<BJ}_Pbso74g?jt*n4J5nWqq6zqG1uJl.ri.3{D=h3Q:PtLpbZ$uKetFw<' );
define( 'NONCE_KEY',        '~gc;[/8|IMWDuys7-t!Y<qW{I~W1%7!+I4,5H9pa*X3N6[cZ^gS.Bb>)ah`D07g3' );
define( 'AUTH_SALT',        '&*CVmu2MUR[y(7rSz;F$E)~;4hkfdbqF1$Cyi?dV qr2]**rgf2)l%ObG]Jd 6cW' );
define( 'SECURE_AUTH_SALT', '?oT%,ZF.C[#Nq#Eb1!=?d9}ye`ABJYo4$?uWNEYZ2,V[k^9$$cCQ,qW H0Z_?hTS' );
define( 'LOGGED_IN_SALT',   'yBB+NaNGuXMYJ ac*{OoKE2wh wn]ytxPQ&<(bdmGot_j&BnL,~-Eqw0zQ=<`$fh' );
define( 'NONCE_SALT',       'h)2F(-=cnz;:ER^*W:]|9;<PC2ByS}HI&((f%wg* iWy&Fc}*WhL8!wAE5#Km`^u' );

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
