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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'masteringbackend');

/** MySQL database username */
define('DB_USER', 'masteringbackend');

/** MySQL database password */
define('DB_PASSWORD', 'masteringbackend_password');

/** MySQL hostname */
define('DB_HOST', 'db4free.net');

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
define('AUTH_KEY', 'L)M@cy0y>Me<c4Xtq+uEUTD?lvcdaF5h,^uMIXb(p@BW{H[Lqu9=*5aLl$L7j-Vc');
define('SECURE_AUTH_KEY', '_LRhc8Cv,2!dc*(L8++i%jCFXoG;1ul$vChxvQE#x5I%e;M&A2tJjv`2z1z!*[4q');
define('LOGGED_IN_KEY', 'ufZv,wE|Vhggk~;&{}h(&<c#:RApkzj]i{Hu@+c=n:b}f>&sUJ!eL=76]]+mVL|M');
define('NONCE_KEY', 'OCLjHZ8`H$C(gWeS2W~Bo]/L<rH{a(_O~-94`M&,tY}7yo)X*Cx!^yziM34RL.)0');
define('AUTH_SALT', '5O:/oj.~L1(uX>y1PfFs>9G-[o;7T6,j<~xKS9/(>yMv/Yp4_wo#%?LV.15VV}ON');
define('SECURE_AUTH_SALT', 'k/3Q&Z5[eTt3Nx*X^N=:!mjs|3hD9NEbheFY#f8&(;nUSy(]LhKgPiKTSA@B~>HI');
define('LOGGED_IN_SALT', '16phf-&iSm2<pn)J<Xu&.k^lY-P}O?J;0TU_j>(H9$t2huK.Jy(1*PAK]^q?=X@|');
define('NONCE_SALT', '8^eO0p72[MupL Wh~=j8Gs;,4{[Z Req8frz`sbFuTIQt,i8UfxrUiMW#Q1R@BA_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
