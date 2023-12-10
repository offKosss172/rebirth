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
define( 'DB_NAME', 'rebirth' );

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
define( 'AUTH_KEY',         'Q##jkkq3d2,.T5JKE];xL,r{G9;%&*WgUTp5!FMyKZ3h)V.W6&gQGzg0[>FMGGw}' );
define( 'SECURE_AUTH_KEY',  'oo~%}T}(3?$.U0mUMKl+MPBo=e4FYy{Y1II@N+jRayqS|!K~po^d<U^dU$7D8>V~' );
define( 'LOGGED_IN_KEY',    'wK g4v9|do#bY!WE8R}OgyG{}0@~:=U(bI:WLD+#n)R;lZ[uY}%b+)<c5|rk+;Fp' );
define( 'NONCE_KEY',        '&BsbaT?#z7=xr}S0`)Z^RUrmV_zu;$@?O>gRdQ0Ph?z2P:b0S/m*?8:e3+ufmeRY' );
define( 'AUTH_SALT',        'EX2>5j6MkcqM?Y7a,m[x;x!z&?*f{J~DrK_VMQL`rHG{IXF%q7]SJh uMd130~ 8' );
define( 'SECURE_AUTH_SALT', 'N^0j#|Sy7hMzifdyZd&^zfr(NF-E,l78NEyR.Wcm/s%E~X.U<b,i|>#si;=LJmt&' );
define( 'LOGGED_IN_SALT',   ':4Xj-lv/;SyZeZ]8Uv<?pHy.:LRaOc0TwfK%HB2,`?oyES)Z%?6~>L*MBV(K*T:_' );
define( 'NONCE_SALT',       '>%P+q{/QP49wh`[ g?9;)^Td#$EpN@+:|*6XPUdy27u<R]jjeCV4$@l?s~QL|{zW' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rb_';

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
