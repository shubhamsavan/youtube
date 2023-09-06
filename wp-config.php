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
define( 'DB_NAME', 'youtube' );

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
define( 'AUTH_KEY',         'I<J85+9LaG@EN;lW-O>U+&d{hDgd4m}~nkX[e(|fhx40YeBnH?f:hvqynB<`&K@0' );
define( 'SECURE_AUTH_KEY',  '?K_o!sfy^!#3GiA27O`;k!S-8;l$xS!uEfnI_.Iz(&d#^}E::7v mHueX?Q/VLxZ' );
define( 'LOGGED_IN_KEY',    'n&YU.N~t;y<9:{S)({3Gzz.r2.<6r.z+1]Xfjba[KM9DahtdY>IEb)`ag+ljq9ft' );
define( 'NONCE_KEY',        '^@!]m?K|q#*RIP`S`._yQK^#uBjFYE*R6cxnn=?nm/VbEw4^%`CzsA&d-&z$WIvu' );
define( 'AUTH_SALT',        'qs#Sa1cPtp+4_ z6zK`PUn?)<qh%ejmxQm{TJHF<2ujEA9?01!ZVg9pWdrVkDs2j' );
define( 'SECURE_AUTH_SALT', 'sdvglGhCuPK9IM$1V_TlyJ53B$]6J_c*6HAX?pheJj]WwXQo~!X>z@d;~Yde_(~P' );
define( 'LOGGED_IN_SALT',   '[=XzzrPCR5UuboCP+_<aA95xy{kE~M0$dXDwQ+Am(zMq>k~06jg{u.Q+|d&1,^E{' );
define( 'NONCE_SALT',       'kBliuj~+OQ<7 [=Le#}VEO,U9vp>ojNyUkd*tc96_1:WH!^Pz%EI#M]iD=E6@OeM' );

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
