<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'verantis');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8C+aLQT<}.f[A4;>,Z:O[UKqMf<Qd}HVP|Vpos[TJR/m.=r#t.ilN;|bRBQH&?un');
define('SECURE_AUTH_KEY',  'f.k;wkyBQ|aNg7#*O-3zfr-|)p:LoC%-FUohG)r`@Q.~+mA?y`{zt-NuY6;0fVFy');
define('LOGGED_IN_KEY',    '?KA~vBQKW^,5%z$Fet^8txprka`d/GC:T}-uiWD1oZ(Yvhg1k 4,~eJuE~@6DSV$');
define('NONCE_KEY',        '+:e-lf#b$L^K311bdBE+aM}yFgW ~-0(o(@A|-~di =ZpzZjN-`]_T6ppdhF.+5D');
define('AUTH_SALT',        'ms-YdJ4MKJbUAr0k8yWoQ#I+0L(wY){m@7s;XZ!txF[}B)_OYf|ODTwIm -.Xg^^');
define('SECURE_AUTH_SALT', '`~I_r>#G)U!1lIiUpAg4olOZf$mDN^@(I`pJK+.<h8-5Q+>vJ%0^2a8S<Cn0J`XQ');
define('LOGGED_IN_SALT',   '&~w@= jqUu0VwdTXZcMd/oq2*{G{zh/wdg :a)i*zWlNeZWyxB>&u:]b$1Q(vu?8');
define('NONCE_SALT',       'gj+lP!]=~cI3OGM(9+7?Q@0QzPZ45_Co(i0*=gw7kueA<ni@D]-643y<zk?0Fvv@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
