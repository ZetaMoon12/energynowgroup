<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings



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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'energynow_bd' );

/** Database username */
define( 'DB_USER', 'energynow_admin' );

/** Database password */
define( 'DB_PASSWORD', '}VjO_?x[^@vd' );

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
define( 'AUTH_KEY',         'kFKDUdys75!:jB|;K,BBKo}GNhy_[>[vCz@NLnq.xPzfu4PI.edxvo+n6KAi1kd)' );
define( 'SECURE_AUTH_KEY',  'jy|)o%$4LY8y(P$T/!,;p509z6dOdcLp^XiMUg6R}g<N`_)<)}7NG0M<HQl1=R**' );
define( 'LOGGED_IN_KEY',    '}3>G)aVBj&R@>lgGy8F4nVgE5e D1&=>oBaNU/sxQtYF[}99m5(k^$i7@t09c^0i' );
define( 'NONCE_KEY',        '=)ZMM&k=Rpk0c2EoCq,(|Zs{t^H@oSU@C>8pAx>,b.cO^WM3pX)!p<s2WL9b!WxO' );
define( 'AUTH_SALT',        '*lz E`nNpYwqpYV.n+H8z]W>y:QGQ^?s{)cN+Z9~BH*>21geMi{ nr./j,N(S+~E' );
define( 'SECURE_AUTH_SALT', 'ayq-zMU.p,PssxBc_6R,&>`PdG.5RaB}BNg[)tN(K:2spu4sI$Dh}Y{j<f7|2tpd' );
define( 'LOGGED_IN_SALT',   'f+iK7TuW5X87*r}DzdLcQiW`sDR*Jk6%S/%7G>h9{P}RqhBU0Il<`o<=?}+C/Fka' );
define( 'NONCE_SALT',       '+5c_b3h;rkBOPJ5OmFurVqy1w6n*^~p_vn_yl@S%#E[yWJgcHx&MoNH~U*e97dG+' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


define('CONCATENATE_SCRIPTS', false);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';