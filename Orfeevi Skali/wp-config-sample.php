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
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'wE4s28%[j+2wf%9BDb.~J|i5of0/j|`foX*+R1U2YYb(Q3f.hA:}pTHf`YGuZpq>');
define('SECURE_AUTH_KEY',  'nvI_`w|,3M=d}i8|$W|O4 Nicu$W,79RTfD|u]A |9n+=O|@|3!B?bUwnuZRK@6%');
define('LOGGED_IN_KEY',    'IJ>JEyF{-mm+;*%:]EQ;N8tJr/e[nxyU.nR;MU&]{(Xy4<E%wd2@,Ak|xY=SP>p=');
define('NONCE_KEY',        'KiuDGsrq&)LSf%Mcq`p!P__S065lM4~#F3m,HH-]e-9ffl`!(l9e4)+Tq9G&smdS');
define('AUTH_SALT',        'q2RLt@lb*n|~||;ucQTlY9ha e]5:z#88Kp:[*W S-R-QuUc@-qz$tA$}zwd:;md');
define('SECURE_AUTH_SALT', 'm;6O!y58@aBEOJ$,SZvp*<w|}9;6IH&RiXPo-+<{cnfMAD&g~`{a$2WMu]hG L(k');
define('LOGGED_IN_SALT',   'S~`qj,lICXDq[c+D=WYl%:y1qOpVww97kV2@=<mdq|>:x@MVT<aRDB:92Us[4Iqu');
define('NONCE_SALT',       'XGcY|C(+{,!LW5ek[=a;|M|IHcI#WSZH489d-,A?kGd! +A!No=S/Frof8(b-Y)=');

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
