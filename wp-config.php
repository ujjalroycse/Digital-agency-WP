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
define( 'DB_NAME', 'wordpress02' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ',1x_,2DEInCTQOUL.Ys SWsNtbDpbRxDN<t4o8)zlpM1v?rp@ 8ry88Q;Gd<N40|' );
define( 'SECURE_AUTH_KEY',  '3T<tRp:hY2BznF/+6Tib3_WS:HCr:%*zb>bW,6(4-B- sJ^0ym[57}@4<{#3A*mQ' );
define( 'LOGGED_IN_KEY',    '%1#mD$[t4GF^[D+}X&wmM87K;vEkCI2[Xov,na0BhlTipXx!tkq P//;v0LeTN K' );
define( 'NONCE_KEY',        '#c~~fX8xOE-4OMuMz!U*^,9^CkB pk]p-XHLW$Rl+o;Q1>G<xxBDGyCCy#=vH~` ' );
define( 'AUTH_SALT',        'A4XkJCD6e&kdbLR9#)cYL}w=DH:^L@](Xq_POX$=ja>gXIO~DFBm0P*P7JN! qi2' );
define( 'SECURE_AUTH_SALT', 'YixDlX:=sCoT|t4o~]/v6bTNN&4ZcG^K^!<iq@s15{AQ=nN{_U7-i!Io.E9}Hd(4' );
define( 'LOGGED_IN_SALT',   '~QjJ3eo8@3pitx+%4iw&sixi^)q!jkk~mZ|F({SJ+7nw&T1G5XGdWz [GJ@!o&eV' );
define( 'NONCE_SALT',       'H(%pW9n&J17Qpi^~,KVJ?)JPeqo1/Q#zxCt>zjWCe~=_ASgM$zW5tMXDZK-%F;}U' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
