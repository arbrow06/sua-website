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
define('DB_NAME', 'SUA');

/** MySQL database username */
define('DB_USER', 'suauser');

/** MySQL database password */
define('DB_PASSWORD', 'su@us3r');

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
define('AUTH_KEY',         'A3<A/hxA5}*h.g294IVRwc|UvHNB2bn=>O_:+p^#~2xwlM*miA+jW%lyRs Q(s&E');
define('SECURE_AUTH_KEY',  'mL]3*zBt;5)n{a)#q?_0z:-tu`pt#aKtpG4jzo,w,W_j8@4a)O|]J?C<d`>o!:aK');
define('LOGGED_IN_KEY',    'I,Nh,JcN)/FV|9Gx?}cfQK=S)}L2tZG?e]<Ol3)5rhW@cAYp|}rixvMp(SAtuC3|');
define('NONCE_KEY',        '|7NM8z_MB2U1L@cmD:U#zs$ezn8_5QOv)_J{+ x1--<RstYgGf].+j%TrZc2<wcO');
define('AUTH_SALT',        'P%Rsz!:&r+kdGUYY,Rk>B&/}`AIFPn=RarG6d^%f*g.-W#S~#A0+qH9%M_YqBC|*');
define('SECURE_AUTH_SALT', 'ZRq;eU|USdOsOF mHe5VDIW@+F/4@QN[a{k:7J]>fKv.)G-Xxq-}&)CFf6dfTO[!');
define('LOGGED_IN_SALT',   '>a&t>yV|;$Php;5g-CQ+Vo4T--pXL%;pLz:tT|J%e/*+>+=y-imXe@`ul-b7xj_H');
define('NONCE_SALT',       'Y2n.E&vypXgE|h)we~fPd+EyYP*h</zee^rlA,YRl/ieiIMR8z0uS ;@np`X?4z+');

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
