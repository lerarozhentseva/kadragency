<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_kadragency' );

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
define( 'AUTH_KEY',         '*^R|JC:9=~I6^rip#)n1zISZW|7!=Dh}v|h{~?sM{XFTL4P-26x4w&S/Q/+DyY{x' );
define( 'SECURE_AUTH_KEY',  'Vj*>#vi&z</#F4,dG]@QPue31K.@hlfw&l1z~SU Lhj|ys;v;7|74|_yV}/{/~u,' );
define( 'LOGGED_IN_KEY',    'tK#Y$o0_jd0Qz{v*OuQXQ}IpMC86HT^MRg@#aX+MSfc5D]Ch,m-DzMW[oKk`H1]f' );
define( 'NONCE_KEY',        'l;_6KKeEd0/MTX+I(@{qr_(JnY/Uf(32@iM!:QN~b|gUqRi!=A>q]@VDs?Q(*=m]' );
define( 'AUTH_SALT',        '(V5jmFE`[X$hrb=uJ/]wsF!I2|rC.K%zKI3Y@k)o@)goV&b?D=nzX+37LXAI$+3-' );
define( 'SECURE_AUTH_SALT', '3 WXc]C8SCO~=Wh}t!Y^ |$M6ReOpJqSZ<Gd5IX2*9OL//NO3ZTVm23?qB^.^0:w' );
define( 'LOGGED_IN_SALT',   'rfRD%KayN(pct`hYSwe]T0pQ`Jv|rR96GP1/mT4{obx2ZX+Wdpsir9!q}70g]GLy' );
define( 'NONCE_SALT',       'dm[2oYJ0;5uL^s?9j?xo>loB97-SLeZBR#L(i}Ul~.OK6.s]v{dGWxQk77(XXD=V' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
