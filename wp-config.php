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
define( 'DB_NAME', 'mahmoudsrestaurant' );

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
define( 'AUTH_KEY',         '$ni!Cg`2#,ba2/sLFjh S<<1|t[wn~D!R9ubYnISc(.%r@LC=r6h@!_e#b4oF,!z' );
define( 'SECURE_AUTH_KEY',  '-^s7IIQyNG6{K28w4mhQ!q,]0G^Fc<jlv}6qL_n~-`LHh5aIIJ;@Tma-Bi0(jMg<' );
define( 'LOGGED_IN_KEY',    'f~S@+_[tQB}i.$R,#+.fN+EUhm8SnS?%g_^=o}4-]KrgfTY)zy>qQr.BH>= 8_rt' );
define( 'NONCE_KEY',        'v1+J@f[MgA7mla9D.*k{*VyrVNmK1.avPOz`yn;vbZKi;zn!Nj6PM{TQPz,*{+q(' );
define( 'AUTH_SALT',        'Hc*pB]^9qlM-WN1jO)w;BDC%R&>ju5M3kPC>jS}!q^anp[V5|$:J:>lEVgX5Om`m' );
define( 'SECURE_AUTH_SALT', '5TFS|VtU6lecCy$KI5|G_`;EXxJ<Hy}P,dxCI9G2y(K2}0Xgpt-PD[onk-a<u<zJ' );
define( 'LOGGED_IN_SALT',   'CK[RS.a$537:zcGl&*Hs|~TxxXn*H>vXUZ|$KqD7wT!ey2kK273wDs>!x0}~wh-c' );
define( 'NONCE_SALT',       ',XbsU`mGu|@g@93I68E#DPDhGLW7DdHP9.01^~d$pjxfQ9*]A)tfi4qIdqlk35dn' );

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
