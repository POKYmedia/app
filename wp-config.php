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
define( 'DB_NAME', 'pokymedia' );

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
define( 'AUTH_KEY',         'Q$cA+ra??P %gk7FIbvGcm!u]iUX&*@l)!Upr4;X%m~/c6JE~#JvM`dl)2V&:V^B' );
define( 'SECURE_AUTH_KEY',  'l5X@Xn6:Y-`M#@Qek,`bn<M):}/Z2R%v$)p^;/d3gyA`Q:]~kqcS|w2cwO2NOoZ{' );
define( 'LOGGED_IN_KEY',    '0@>5($1J-qVE|#W;dBkL.=;h&[rG<%v$LS#E83!G{3b;EE`%&kOH%mM)md8N+3Yb' );
define( 'NONCE_KEY',        'J0KPj.$j~t(7Fv]27*I)LL>yz?eLfe:Hc;8Hy)>oO:WSi1+rCj;z7MzUV}`JU*Y/' );
define( 'AUTH_SALT',        'eqhvh0@JJO=J6N,_3OSKRb$`vPZwXNmY<C+j3x)07U a3V<,H_A>o5xH+ U#(P2A' );
define( 'SECURE_AUTH_SALT', 'Sb*V+HJ]%{tV[W=P&:#C&V@[~D$gOkrygn=^}TC%d(!3|oum ]lxWw@+<+Epe9(m' );
define( 'LOGGED_IN_SALT',   'Xny}{-(?`mk3b?1(lZ]Fo#W/+}vQTzsTt).oQays/3PPyShXrp)NRvo.p-=V`/8Q' );
define( 'NONCE_SALT',       '*U#,$=i|xH1>NQ:,?aX/.Lc>}JMI:yN>W*_Mw1P5n5h4M$oQ_}Z_1Ll-YM&oc2ee' );

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
