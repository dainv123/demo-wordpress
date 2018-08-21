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
define('DB_NAME', 'tanphuongtay');

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
define('AUTH_KEY',         'h2#{yuz:4V;(umg/^IA(#;>ORt@7_6qaRII? t%YEHWmE0{&h2fy?18&kV?Lp7NL');
define('SECURE_AUTH_KEY',  '?u$|<-{vgIl_,{!|rPjIRY7X:T#xK%Y_HV#N&Bf!<0U7ZpF6-s?geGwEvDO3](nH');
define('LOGGED_IN_KEY',    '5h+_1d:4Avnm<q>I.0bdQJZ03t{]_x;;BC7v[k?Q;h9_dl]>I jX0c(hUw]iuApf');
define('NONCE_KEY',        '{;[8ey+Y$Nivpu;jyELq6W%R$X.tvH31DRCer[H%FG6[6xr<q,;B#{hs?&LA:LdC');
define('AUTH_SALT',        'x-0Hupr8EViKSmV&}YV_#%H>_*Whz#FVyGXb}Hn^XZ@iC=G;Bc<Y(=AEiNM/53)n');
define('SECURE_AUTH_SALT', 'maB?!f3e]~;Q`ult/Y[EL$WRSquQRzl}>%1i>QUo3+Q6h q!v55D{-=/2;`)`3H(');
define('LOGGED_IN_SALT',   '%W3v! wg%9WhPCk{7&^8EU?^.m*AhtXT70MR<ZSg/!QDNHhAV<Br1_>I&JNN%.ub');
define('NONCE_SALT',       'iSL`zn]Iyd)B&i(D;,B/fXR.5-U& 5SrGE?kA`q`OTwS K#ab =ECbbjVXp/ga;3');

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
