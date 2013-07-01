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
define('DB_NAME', 'lelissdt_wp1');

/** MySQL database username */
define('DB_USER', 'lelissdt_guido');

/** MySQL database password */
define('DB_PASSWORD', '@de1ante');

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
define('AUTH_KEY',         'U^2$D=!9?_UH]!MEZIeLV<RPQ`[veW$W.ws;bEym?|ziKH`n ^04|1( @(nt&Rrk');
define('SECURE_AUTH_KEY',  'b|j8wwl0-:TRq+3J4I0dR9!m:ljJ.fK](uwk.mK;mTG+qSSP51<Vf&<#K~DYl-u-');
define('LOGGED_IN_KEY',    'X%.V3f+#?ORhx{1~o%[/:O%5ap5Y%}nW-lXSn/[ aw~{=1Jk Ox`?j~4zn;i+A_9');
define('NONCE_KEY',        '~r7.whiDy}Wg@A-9)<`2;L+2U?u  *MU;~,>ku7g_QEpc?+`ypi}=_e_Y/o;=*9w');
define('AUTH_SALT',        '#~6S5w6eGJr-&3=3~:M:Hg-l}*R^7jLsxz;;3F,[`g|%HXXaiO}g(YP_T?#Q%>!g');
define('SECURE_AUTH_SALT', '0c>fXRrd{ea? na9ShNSI{p^?o}K-9X=9HKh/3&XC++rn`=&kHD-9_t[>ApU8^5<');
define('LOGGED_IN_SALT',   '2q=A-Svb`8|1.*<BblK;= y}Qw>^cIg37x:dF12h3S*^%EiQOC-bG-@}KIm3k;(c');
define('NONCE_SALT',       'H!|Ae02urO_ADK#T D`VyQGe|R_Vl^jX?|mU{Q#-]tc8]bu(&-`#Mx=I/4dvIQ#d');

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


