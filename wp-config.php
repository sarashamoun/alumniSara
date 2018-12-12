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
define('FS_METHOD','direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'alumni');

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
define('AUTH_KEY',         '%+Uriq:>oBWxK>{R^m<VkN lNzi,$Tb^{$!lBF-us25$;Ol]?8~(C0{t-R7fP p9');
define('SECURE_AUTH_KEY',  'F3C8)6Ky=u;gMrz7$+<_C.(<xuXR*!btW]Ifm?LW4Rte_LJ>o$`>:27x<rLXG>63');
define('LOGGED_IN_KEY',    '.Te@C}LA0sb@#7`})g322woHe+$vJr!le+4R0Jk(hVqa=@2X]Iu:^N=ab%8#]NoG');
define('NONCE_KEY',        'p^se]owig.qoLB5SFM^5j/{.+Y@{(4VHq?d!qeQqcs36yu!.<.[B}xN*?e)iEsIG');
define('AUTH_SALT',        'H1J}bM^D#6=I+fpabDt_^IPq;$TiTEWtg$bu:BB~9$YCJp3NTM^? 6xw0h{RT)2+');
define('SECURE_AUTH_SALT', 'y~~IB7J(!nb]zk]L{v Qv!|{n*:^h:3}iyus[y)I.WtX]Da;Z<#q.r)XiVIh6`Q?');
define('LOGGED_IN_SALT',   '9Udi}=rwHR[KCk}!+a&5ZE$!#k;W}otn-vM#.c)&]J ^?h>dK+)wu<sG(]W85hv7');
define('NONCE_SALT',       '~=lV`R`pgY:o-R=Xi?{npBk47,aJ~O|ZNn4^h&p+)/Bm_<)Z%4iu|-4z~Url%Pv,');

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
