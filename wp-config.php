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
define( 'AUTH_KEY',         'imhY]55~w>$>Ub{#=^zKs}j8$+AL$N1oN*8O90o!<C.zjONct#MNZ7ZaBU^R.TX/' );
define( 'SECURE_AUTH_KEY',  'B(rg0^-8*tX,b^bLBo:p+-d.g/!JVGbO;k|lG#SEU%n,XINw8)tReKFRY/`*P#lq' );
define( 'LOGGED_IN_KEY',    'O]w#n9ZAgxYv:=YEy-eFhhWd(o{4bw2Tg`*^(An/+lM^>6b(Lf5KOs}P1{/|9z.u' );
define( 'NONCE_KEY',        '|,KM&P]2)~UBZd3_!;hC+GI/>|vf|X6QI_q2-LjH|>CSFLqm4[g<16ggU~(cNWB&' );
define( 'AUTH_SALT',        'Kt[LWDK-D:&-@;[+mNXX66*lE(osYLx$}|=}VnN*gxG_+u5+mP6#4bF.@!R=U!/q' );
define( 'SECURE_AUTH_SALT', 'pp*Jkos4?{l<Za<t97ZZi1a<zg7*a//=Bmk&UGy/HPL0XjJMWET~=`:J;ex:lZH~' );
define( 'LOGGED_IN_SALT',   'F7yuAhyR4)VAzPihA@P:</,N9>}EgYrm{nUW3$f#JF9e-mY:y7QEI&{e1k__8&kW' );
define( 'NONCE_SALT',       'rh<XV/Wzkry.C|D15$9_,~bD)-k_#H$:Xe!Ig^=Rw5l$egDR]zyzlh,9>Y^[u*G ' );

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
