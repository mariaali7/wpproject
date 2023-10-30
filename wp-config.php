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
define( 'DB_NAME', 'wpproject2' );

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
define( 'AUTH_KEY',         'v(8S}SkGq;N_Ej]@>F]HmZzAzNbU#1ND$j4t8CU9Ht1s+Az7%fdJuOLB.,we:U^>' );
define( 'SECURE_AUTH_KEY',  'Sm5j~FP;c}pg&:40*W_HFR9^Z~@&Fg6 ;BF@4R7qfS0EhsRY Y$6,?Q&`L4{EBIf' );
define( 'LOGGED_IN_KEY',    ' zUb_:LwfvaOoG]cj+rn)i7l!O?fp{X4W;J4y29K$jB2-JIm.CMH}>|qyE*tn!~-' );
define( 'NONCE_KEY',        'X0[/Q=[U[!1ncH3R|!KCVb Z T.x0Fj/0 j()P3+P[E5f8?5?#+~QcX1b4S}[r17' );
define( 'AUTH_SALT',        '[m>seu>jU{<q]lJ|Rv^d-?!$b64%[0:j8,F)jF<sQ4.LU6&]Y$b~~,3n|u8Eum!=' );
define( 'SECURE_AUTH_SALT', '+e4bgNZ8>`fy%nT$I?5<iHi.sRI1a?rg1@$P)ca/YMncA;YE.#B(]vxa(#1uG(~)' );
define( 'LOGGED_IN_SALT',   'Q1FqwfAb-rMP#qT7]0DqUI&. 82eSNCre!VkmAe(3E3s_;$cwYZhOr$9q$k FI ;' );
define( 'NONCE_SALT',       '9+X QhTo*7PRYfpt>D9Lt!7I@Dv=w2.>Ky_ `oo6E*F|fi>VQM169.7vZW]f,{bR' );

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
