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
define('DB_NAME', 'greggazs_ada_gregunz_io');

/** MySQL database username */
define('DB_USER', 'greggazs_ada_gregunz_io');

/** MySQL database password */
define('DB_PASSWORD', 'GS7JlItq9nHq6Zgzx6Ba');

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
define('AUTH_KEY',         'jeN&eH(eg+/$[-?Tp;h3$l|?CeX`OK rxl~s~zjh~^5tsp:B3|-8- lhQ_E{|<;`');
define('SECURE_AUTH_KEY',  'W0uFLqN%sr1Xs/] rdYdy;J?uh}}4/2n*er&A4R!yb%5^MUGWkuBK:=v<a[nqV{:');
define('LOGGED_IN_KEY',    'z#U/iQ5HL=-!6PLs^[2<WaHCBr`5SE^&I:>xY%3$G,Ab][%os6(n|6rMV2>{8$<J');
define('NONCE_KEY',        ' HiW@yYx<lmj>g+>yWSf&BPpwePxF^|]jYg>>d{A_wJ3B<yz@8%#{a~VKz;#F%[e');
define('AUTH_SALT',        '4dP}ch6,=LlB47%>L~vfjed6Xw5DAM:4dg|PG?o Fe93WS4r{$fg6<X@>T6%S}/3');
define('SECURE_AUTH_SALT', '!EZs7@ly0X/Rn!<]? 8<q]k{e+(SN!VT)eX]va5sYYXVk8X6QN_*aNbrVt(c#H$K');
define('LOGGED_IN_SALT',   '[x5W-N)@=D)|(a^MMR2mkT,D %>dcu:c24NL+9>1|b&]*b1*wno2j9$EaJ}NB]?_');
define('NONCE_SALT',       'l5CiT<tyJp];XF$O|-Vn4%zdVG &>d,NQwfg;-/uCi.*AisCk8<!UM[7OvC$@c)W');

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
