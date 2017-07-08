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
define('DB_NAME', 'wordpress471');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '1b#S>7=BJ,iw(QbVi8 hu(aJ.{?qU.%{Y,UjLxT+PoZ!NXD,J;s=;ST<H7F)ViVg');
define('SECURE_AUTH_KEY',  'TpG=o^_h;#0vFOLGf*xc*`:_n/29$?~geK6j|/<7{A<nYZz,1i+A|W?F]UioF]1v');
define('LOGGED_IN_KEY',    '?-d6!uk4$~AMN9Wmt#>I*GMJ<)<~2F(-[tIgZw=+5{y[O9B]Tz6M=P):|#,geTe^');
define('NONCE_KEY',        'YJEye*0ohYpw:Xbzin@^Plv-xZ?}Ra?VDh#_/KsL?>s{D#+*9<5&L6 pjjy0{lnR');
define('AUTH_SALT',        'ITqoFS@fATVvc*48>+]!M~AS*6MVQ^WnHlr;R}vdE:au2cH;NC-zG44JY9Q}V9|*');
define('SECURE_AUTH_SALT', 'naL2)MI7VE[k!P[Hj(x7,-ew}oW,-&@7qW&IuO`2;YEBzwlt<EK#Z&q{OO{]n[[G');
define('LOGGED_IN_SALT',   'EMCBQ]X2:1;Av[8:}1X>Z;5{xu:jQLTQ2)eiz}Mx<80aR{,juKN`1X^pifC:wlpL');
define('NONCE_SALT',       'y,09sSPG79;TvJ`r-,K# LDJfb/21kDZcM=NX,&=bfKq?8mt9@tX;b[Pe|+HY;nv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp471_';

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
