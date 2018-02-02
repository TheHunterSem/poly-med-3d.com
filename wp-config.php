<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'poly_med');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'SRJrtd~3&WEd,0AAv<&5AM!`Kk`Q4QfWB%i=gyGgwUD3`Q2+):/q6<(IP),}7N*F');
define('SECURE_AUTH_KEY',  '(LNd7}C[GRLk8@Jg^yyQ2;xcp|aFlYqQv/cU`-F]V5zdFIQ;I/_VyA5{Io8li3Ez');
define('LOGGED_IN_KEY',    '6lu0rgaiqXCTm@GJ77%u=SqW5<lmc@UQ{+p([ig[N+b[_Z]NNWG3)UPBxm2J?X&=');
define('NONCE_KEY',        'eFN HnpHPNG6gzwHMeRMdL^CGja^I:P,HG3E*0aV]rgBCB`+P.){n.vQ6X`|>G:x');
define('AUTH_SALT',        'XJ.LiynZ[seIkJ!/=1-1y2@8q`I%4qDn#`cj5J>0[B?/(-C_!qIk-|sgB2%KOu~Z');
define('SECURE_AUTH_SALT', '$(b$~xxTg7fkzzb43p#gK&Fu+M7>kOJ|=rup:rqj8y0AB-gy`}m*IPFAuD+$,SM+');
define('LOGGED_IN_SALT',   'yc7J0K]~(j3#@$045,:qsL}vk`Z`JN>mDyaZX|[v0--Aea(<<i&!68}5fgc4kTF6');
define('NONCE_SALT',       'z^FF_6]PV03u|[7fST-3jlh@V3U.QS22@Y{L{s7%-,TzH<YmK Wh)*KFsfFkXZhd');

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

