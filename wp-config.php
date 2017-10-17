<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'logansshoemaker');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xLf[Bk2;xrAUs}/R`nQw}VT7#]UG6@d]|98].:anS4gDe(`QF7pIf/i8Gyg!v!zK');
define('SECURE_AUTH_KEY',  ',+GY[du{/HJ*!T|x^)Ou[VVrZ`j%>JX|PV}km@e;YMm`k(xBJD22%(OHwD2bavoV');
define('LOGGED_IN_KEY',    '|iL+ZUva4?Z7mtO+Q4t.C %~6M.Znv<}U%{;9x!_4OZo8`ocrXn<H,srBnv:oT0j');
define('NONCE_KEY',        'RAN4Mz)Isqg,A/t= zk  N)9<tXlq1CWd2H65L%<y99hbHL-naYgNL%ia>wjw611');
define('AUTH_SALT',        '*U$s^3{L-)})/JW{T`&aKS7K} (bfg:P&V|jI# q4OfT?FM/H2xr7hNbmlRAe81#');
define('SECURE_AUTH_SALT', 'k7BM[<PTOvx=HK2Tyaw<P.`_^Z&Q;1?Yo{Zx37nbv{KU1gaQP/`8;cs;?LCRN13N');
define('LOGGED_IN_SALT',   'i3l/aK0HT-.AUA-ccLYfprY:Ij|aXTv;;OUTg7I-`zcW++H<`I7KX|W~pmiZn|MA');
define('NONCE_SALT',       'c./Lp` bIMC7fvIJ&p5-v|]l(GZcc*<kU&<{);1ap0$W,%#%jmd:KB1J}&EavfGH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
