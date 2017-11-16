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
define('DB_NAME', 'va');

/** MySQL database username */
define('DB_USER', 'developer');

/** MySQL database password */
define('DB_PASSWORD', 'JUEjMEZZc99jKA4v');

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
define('AUTH_KEY',         '>Zz_++dDG(A8bVgw]}KTK}R8b-CZkll[nNu IU1s>B7x8PihuL20RIRG%][0$w,/');
define('SECURE_AUTH_KEY',  'bG;$&/NAjwt/_g.*{|2yoUZk>TeG+d.gphT0,>q((4+SpZ%>r*h%jinJ}(}zqxZH');
define('LOGGED_IN_KEY',    '=7=kZcQ_ TVG*K+}a=zb{bB.hB_<px;~5W:?HsN7`nV7{Tp(723-{lI[Jd1bZ+#]');
define('NONCE_KEY',        'pC/K#>o $mYM/;Vb/AG2NO3+d)>no#k+bG3{VrX26&~?S[rx8`xt<^@lxi?V-$Bi');
define('AUTH_SALT',        ':.2i<20=,B*ib<4uU*Tar;jOj>Z(dVK!#`?LD+zmiUEzN>T5=E@V,N|bdY6Oa11j');
define('SECURE_AUTH_SALT', 'j4H4~g]#q:Bv;j@  f&[`w&.lPFBkz[A.gXc~Ml>9Q5pVOb>{o6vbD6nX2k;-CT_');
define('LOGGED_IN_SALT',   'dw5Q<snMsLcPT6SmfY`1DxYa)Pv;-$V^)x>hI-FE!#h@{j PhHmh-]}M?V&oihP6');
define('NONCE_SALT',       'IG2K=$M}1C7-i665C41Sj+tO q^Mc23C_N+=Y;M[]:sv+7GaT2.ftOLy^P}?:.k?');

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
