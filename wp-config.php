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
define( 'DB_NAME', 'ics_db' );

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
define( 'AUTH_KEY',         'j(QH[r`R43|}5afi>M|0bR7vF7HZI@90[?DRh7{^0.= <qKt;Z[&LF(bANWN:rQR' );
define( 'SECURE_AUTH_KEY',  '4=[S.Nkeja!A_EYJ5:alx@Z- 2.FCf~-&W]z$R&+=dIq`7w!|id~&6N<:+3~|npB' );
define( 'LOGGED_IN_KEY',    'fM| ()8jc@A9&A|Oq-*t2<[[xqGZkw|O!]_QH|M{a.^]]*13}!Bzyw< I^]*Z9G7' );
define( 'NONCE_KEY',        'bV%1Od_)l1Rq.X=h8!$ev&5i0:nk2&3u6xmII pAf5#i5F5VI$56V.&]{UpHjsUc' );
define( 'AUTH_SALT',        'yj};Z{DuW|QHQXx:{q`.4/L|7T4_vRs`q!OE)X)L^a6L,T+j9y)=fTx?>bR9y^C0' );
define( 'SECURE_AUTH_SALT', 'zZ,UTR@,+x+fqTg(hE8#/(,kXgL9%efvD.hK6[<&>op79l:v*:Yne`IGac&~SD{ ' );
define( 'LOGGED_IN_SALT',   'JAS4I.ZXZza|x<D|Wo|%^Hw;=?_H8pDG=*g_8~>!}15L6[zxsQ+)M*0QmOuO%*{B' );
define( 'NONCE_SALT',       'Xu+?#w:FPD_:<_IC^cafb%2A7-thzMa4obC0~ri~{T8),X Lv3&{d=[n7!|jX,h8' );

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
