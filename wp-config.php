<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         '6FPm6NYf&yiL-mn-X(xhDK]=)i9)<jN!EyGE}%;LRIt+geJ]cKUyQmyiu-{.H{a_' );
define( 'SECURE_AUTH_KEY',  '5 .$MzU*cpa(hq({~:ehg?A;IhLc5WkVECbSN]kA-6D #0k?5mRk_RWk5w9eSv}~' );
define( 'LOGGED_IN_KEY',    'a=S!ZM}_1`r17ix)zi~oxVV(cO*[if8NI%a2hnIAyQ(xKJvFMgKQ @}U<4?LQp[g' );
define( 'NONCE_KEY',        '>Yjy7&9Y&4Gru`o%ZvbzN718Y>z,OwZ`yr;G%qIYT1@hV2c,/ius^%euC1e7`[P>' );
define( 'AUTH_SALT',        ';U>)ET3Z&N16</6fcxt)]2@eVVo`m2Y=c6Y<tin;vhebtS|ELWdskwIOBgDFT9F2' );
define( 'SECURE_AUTH_SALT', '<gU>5C9pO(w.8(g~l@7_jl.@y@hD{aw&>54fw+{ .KtA~-_S:?5s:^UWY:Ku__?h' );
define( 'LOGGED_IN_SALT',   '8;vtpr(sYv$WWNTHT^9:VOE4zH:*CR.EaSL+&QZ`^~*l~#!EdR~8N7kosk)%Zq*.' );
define( 'NONCE_SALT',       'yg4#a/][Ad?e5ff.woDWmEpVEH_S? 9qDV&g2^tt}ewe:]d8j+`mQJdfluI>Am$`' );

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
