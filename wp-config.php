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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'aapulkiekjaniv');

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
define('AUTH_KEY',         'T;9pFTa-ZEXOk5bw;A$|EXt?-<> @0DcGu.~RE<+}Ut7#IMGL(:!k^W1q#mP-qy0');
define('SECURE_AUTH_KEY',  '>$bAl39P8-Ms:Gjg[R#p-/,xYeiM{cEZU{s^*N[b|>s/S||pZ<ru;p9OLpHeBZ^U');
define('LOGGED_IN_KEY',    '8:o5i=BDX3u2_L-[{8vcu>Pd%kI)OAdP@#9==7j%&Q5ue62tR!:(vp/K?-!z sO_');
define('NONCE_KEY',        '%RLJ#Lcluf{mgX}A[$l;k|Zf2uf]yt-C2hfL_JTW8`h3HD1/Jc-KE;}5Q`q~f)6S');
define('AUTH_SALT',        'g5+!f$&[Ql|wxsz|,)<u+T[Y)I)[b.iL/F<  _fSSEY`h$s,[FmO`>LX<?*>H3RP');
define('SECURE_AUTH_SALT', ' : N3%qW*)m,O8dzz|v(_r||WN|r9s2y-isRe&#o^11k9ii`X[?bG?|>S:?[[p:y');
define('LOGGED_IN_SALT',   'L&d-lU>T3LdzH(|@n$iem6IlpF-wpGEJoqARI~ym-= E6YlBZZG])0BqReR.jm/z');
define('NONCE_SALT',       '/M/f}Yp?uv-C w8RvTJh_*l{wGvIu?#F(GA+S5%V~0UwzSea2j(SP;?AmdaM&`f|');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
