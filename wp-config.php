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
define( 'DB_NAME', 'worForm' );

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
define( 'AUTH_KEY',         '%|afYe@4T+/}L]8N(*cA&T|?H`q:tG5H%>Vw?$}bAT/qFi_[ygVbE*6~.%e66;{r' );
define( 'SECURE_AUTH_KEY',  'X~]<TXd8#_(aUO xB@@f3LA5E=^dN<=3#@Y-(Qy0_hFJ.z&LhU^k;l1UTNPcZh,W' );
define( 'LOGGED_IN_KEY',    'Kuo5EX0E<_^&#}56dL.1l!X>q|g)jTf;-{-V>SE`ruBktXQ;E#?:vuAr?OXn2q<q' );
define( 'NONCE_KEY',        '~~9N5(,A(Tm3Nz`1/~)*kve_OI(rVA2UTAUC#rwV&0^D*5SRqcQadko+hhm0M(PW' );
define( 'AUTH_SALT',        '>zQ(qQtv0XX~([20$r[oJwIyxeU;[vqmYb6H,YY8o#yDf34]gGETFX*,O86P8{gH' );
define( 'SECURE_AUTH_SALT', '.}J)SQvdsKJ4m?XF+>Y|6~`5!z1pZIYh-`P;%&P[D[~.=4Fx@s}COMHCGaN`C](|' );
define( 'LOGGED_IN_SALT',   'gv]X<O&9:X4e2-|.1cJ30w(>t1D(2DQ9Bxu69^eij]<(9CG+pJbl-~JIQb1@k4pW' );
define( 'NONCE_SALT',       '|@Jt_&maSgJz85y0&|Ig8_plZ_{yJOSfce$/gY`hrocMA.D8Bj+6zMaP!=<^!G~L' );

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
