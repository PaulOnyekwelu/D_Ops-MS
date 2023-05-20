<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ojJ-n77E-VL[KOF+zlpi&)U~PBvWPfb)j9FT|X$-h%>;faE4u3L;Gk/QV:(1}HRu');
define( 'SECURE_AUTH_KEY',  'rGDnkx9:W1rdF,?R-RAlp5iR(mG8i{!~v95+|^//N.o.:P#<26/-Pz`[|w}8O|P+');
define( 'LOGGED_IN_KEY',    '14U#*+11uEClh2ROu>TS0|9+rdOG3uq<^R/suIK![mBM^-Rc >A/@+|d{}9Ic;:p');
define( 'NONCE_KEY',        '3?mLVB]PY#pC*qRHbb&;[OG-|Up sh^ *Y2FL[+vMv0%b;(zT|mWE-|*d-e?}x6B');
define( 'AUTH_SALT',        '&cHkH%IPVc,iy p%^rkh-*WYl@{W+vaD@d=26J+0<bzaYTDNu3e)JIrVj.t[doOJ');
define( 'SECURE_AUTH_SALT', 'IX41 +Jnb$qiOtD4<qz:([?`]}#2,,p?b_OqZm)<WGBtIha^lO.l{k|VYTmFk1 $');
define( 'LOGGED_IN_SALT',   '`^+bq1RAnBEuhk|GhId4#Y?yn,3f9PP%Fb_~N ^o}4;3efLJUfk=)G4j?.jS/Wry');
define( 'NONCE_SALT',       'N[yiu.v$d56^0rt(^EtmE9)!RO}}3tPx5c-Kwdb-=FOz>,UPHPI|j^+l<0lj>Lm*');

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';