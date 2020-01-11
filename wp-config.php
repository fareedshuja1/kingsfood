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
define('DB_NAME', 'kingsfood');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Museum2013');

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
define('AUTH_KEY',         'USh|r3U,U5|]7R.%vn;^^ `5cHlZ(z?ARWF:mXCr~32-a)XgC^ecUPOpEr^3 UM~');
define('SECURE_AUTH_KEY',  'MyFr_`S2,:MgDSG]VL5hoGSxUBS}Xnq<Qi&3B4^,*QF=~[r|:3a<v9yXlp`C ${|');
define('LOGGED_IN_KEY',    'ls-8UyU&Ws;W~Jl|_,0cW:D0,bP=6Bzgt>jV_j3_Tup$IRs,8O }QODBB&d?<RP)');
define('NONCE_KEY',        'xovCIa_`iv]X}GU@j{ZEb|{jF[bf7@> t.e%dmRX,U>s#.^ !DwwiUb4beOxH&^~');
define('AUTH_SALT',        '=XA<}a__bwAO-YDC& -?n7o/R#4;,ac Dlu]L&fvZMFuUf7yTkC8 =?GUf)8TbOV');
define('SECURE_AUTH_SALT', 'v$:nW;],R.n+agKz#Q}JWx1 j1wV<RF)J4TP]nC?o=vONeHGfjY@w!Y9I;Ek#L=2');
define('LOGGED_IN_SALT',   'r@?6ycLd1t2r^c^P2ii<w[SSt<rZMWaD[q-wX}<R.(uhS$L&[wmb6R08#[fw3!bc');
define('NONCE_SALT',       ':ZL>pkh0[w]Wq7@I?|oA>=h[L-~N*_<BI1ldVN-PzW_sz,gg/LYZ2@1Z-Qk!4/lx');

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
