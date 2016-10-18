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
define('DB_NAME', 'puja_scaledesk_com');

/** MySQL database username */
define('DB_USER', 'pujascaledeskcom');

/** MySQL database password */
define('DB_PASSWORD', 'N3Va?QyF');

/** MySQL hostname */
define('DB_HOST', 'mysql.puja.scaledesk.com');

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
define('AUTH_KEY',         '5qGmwWJ^a_x?+wS$&h^"9u|au/XL1UMr"7"KwTg|+!+4X:zwA*uVBIpdk#9(H~lJ');
define('SECURE_AUTH_KEY',  'PK|y#Y*Sl@5@1FkYNrN7nPlWav~wcs$?RvXuUd;sY&K_1L@7:tS(&A$$OuHxshXC');
define('LOGGED_IN_KEY',    ';`t*?z+5Yv44D*Ah43z)fvk!Qw2WsW:#%vA1o:^;RC*SdFU2;m$v4u?UyJRc8Ol_');
define('NONCE_KEY',        'Kk;XVJ_v@X30mF?D*(^xc$|@+OblhVle4B86i9uy1*/vY*`*BQRC0f(gjanxWW"?');
define('AUTH_SALT',        '*A4OZNK/fW_ertG63MY|;(i9c#vp0"jQPHhAs9gH*1nls^eqg~J267|QuHF@qNM4');
define('SECURE_AUTH_SALT', 'fxApgU&/jQs*@N`?p;&dz86N*O:@MCk03r~iwUcHLa5o;c8i9A1WDhSO#98"?s63');
define('LOGGED_IN_SALT',   'N8XBj|Qfqk;+lJLj:U3OFE%k_;jdVOrua6rMC~WjOqswtF0z&c&GJ5Y4nZbhYt(1');
define('NONCE_SALT',       '@(G?!`vZh^QCMh_Y$Sn&iE)pLg*s5q~QAKf:6nL|~aT`p94*etWY:I_tRo`itmAY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_f2eqde_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

