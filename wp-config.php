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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#T0E78:bK[JmIWS14Lm:fK]g9,WLjd9<)C4e;(;nWvC_bR8+**fscFoW9ehRf]lP' );
define( 'SECURE_AUTH_KEY',  '%ZDl0!N/&Rt6Nme7(&,[1Z41J)EZ8](.OnHo}?|L)pf`ZlFwF!$VVW 2(zpt;Y{(' );
define( 'LOGGED_IN_KEY',    ';`HW5(^cx(20|5Jk7o7iH`Xg_$OU2Yy4KQkS4}yn?@[w.JduIH:DFs5lk%,FQj0Y' );
define( 'NONCE_KEY',        '[ O4ujT[r3plhX<UxdE(Eub5Iw[,dYjO}2D%^6q-UnB9W<8Z2pT-=B q.NI&cD6Z' );
define( 'AUTH_SALT',        'dYa*AXLVcTgY4rI(86sQ2PHM,#^ZU17A&Vrt]ZHZ:ktU=KM~2JhrM$qi!.?;#V H' );
define( 'SECURE_AUTH_SALT', 'H>SrttTOh[=}WWKz~ e%QK=om&lg~[Ja:KSo#mNaHDs1nra)pQ1TQUA&*=2V 1*G' );
define( 'LOGGED_IN_SALT',   '}[AK{Vu@.|N`Ov_XT$4;p+EcpeK*m6eB,NT/V3MjZRASQmutHN_kVw{;+Z(nOJ.K' );
define( 'NONCE_SALT',       '?Le{q{zNd=yYD DEh`<I3Oq}<9PVI&UoBN%CYF^d1ja<*h5|Gp5Jk,=Bv>*A#B5d' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
