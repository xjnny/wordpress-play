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
define('DB_NAME', 'wordpress-play-wp-db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '9,z4rej>u2u9M:G)kYAH0blstYdOF5k$66[[ [KP<M;+3RP+K[/Tm=#;>ZimIC,[');
define('SECURE_AUTH_KEY',  '/[CW[Bu/kV&CKM)(u9D+lTb/vwm$%q^f/mO0^6UmS$v%||-cJEvW|51dV)=(]A`P');
define('LOGGED_IN_KEY',    't:(d}k>K^8iQqDbaRM~CH|5Q-d#?AdU(ge;c&d}0^-#$Nhpo{8>0y3kNMEFFJXmz');
define('NONCE_KEY',        '<;y3Wx&(1Z^]mwag!OcceJ7//GDbJ:1`1=e}mZ=SV]p^[WU~`.KqUO?J2>SnD`~>');
define('AUTH_SALT',        '&V`;`.v?8,7C ONt|c?BPN~Vh:XNydTZ|aT&lEDAIyi{)wc%$9#!>wA1#%|D)%<y');
define('SECURE_AUTH_SALT', 'mT,gnp,Fu.$=}0|QqPz_H!])t$Egz#/PM1PEY<O(]GnV8nbzYYL:v741`FCR+Y8v');
define('LOGGED_IN_SALT',   '=6;^Kwu+Y[(=0i>Yoh9Kz?!^WB/P)Xc{&Dgy_!#qr-M4}dP,VBw:f0h;X~t`>G2;');
define('NONCE_SALT',       '/1r/}3@=Vt;deOr)1@d,yy*WNr-H/fA`rDVO6l-Mh>GgOKyZCl-4Bn$QBg4&7Ux-');

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
