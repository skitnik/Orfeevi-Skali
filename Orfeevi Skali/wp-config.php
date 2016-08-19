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
define('DB_NAME', 'orfeevi');

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
define('AUTH_KEY',         '8WjXC1p-M-Q+;k[*pp~<ofa4C#(3q Pl]JHfG(Ue}{Gu6VI#%?Bza}{r2(&?/%[&');
define('SECURE_AUTH_KEY',  'PLh3n8wLfSb){KuKE<SgU_71>M6;GS3*%)k)cTQ@^>Bdv?ive;&%RWVQ4EN^nd70');
define('LOGGED_IN_KEY',    '3.l_zM*!3JlAwf>+f!}xn[.Cgp(@i&e-<p#}?p2^YlRVqJ^#L+/Zy1&C-`QF1{%$');
define('NONCE_KEY',        '*K=zC//OC_%iIx<IC]EO;(Qm97F/mvhdx=z`W}WsRYuVO?*zOhKd/LD.S_gnk?{u');
define('AUTH_SALT',        '.NLzzt>SMHG>uKq=$l:[4Z84LWf?o=APrKq6ZWT`6qA;SV)tg>fP(5e,pp_m`-+V');
define('SECURE_AUTH_SALT', ',/Ue}=2@EWAJo8m1MFT/4Z)4L9L-J1eJ i&y>(8yn}Qc__2{-=RepF9*`Hser6,c');
define('LOGGED_IN_SALT',   'YcxD_CdONy#4U@+|EM]NLh=;|G Ohmer!:0i_U5Lp>^ IjSdXczu9dJ@*6bITqJo');
define('NONCE_SALT',       'HT}XwsaYFK4lopgp#{ymnuhy|;(e-^<^a-1k}YAOO`s2]^HFQtzl`A4Q+ 2Q/[N7');

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
