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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          's?Qqh)@t-e&7m3z=!]FfqzKK@<Cf)[o^duHlz*=?_9RL$&W}5_H<`~c!>g2>xU7q' );
define( 'SECURE_AUTH_KEY',   'u1eM4O+nn[*/b2D|V`S!]~W 4aq&`5p:lYYiv42x(>N*UG_EaBB;:hFQErhOq}}(' );
define( 'LOGGED_IN_KEY',     ' +$Su(mYobc)_h@FU$_2B}FP{QYNhc@j.3<&{7+IA*?|4=Yf,#hhW1HJF2_OY5IF' );
define( 'NONCE_KEY',         'IU:t?a.28HE:!9L$<:8(-}a93Oo%yg> Q<WxFsAX|Lhw1:)SY;z&Er#Z(5s,W?T;' );
define( 'AUTH_SALT',         'sDgT;!dpiw>o5vWR&q7Lm9;^9bk/dW0)K=haDtU5MA(Z<EkMt:[yz$vr5@wT)8nK' );
define( 'SECURE_AUTH_SALT',  '+CCTb%*v5L^dz70NJWD/g2MC^YwfZ+0(:~9Y.;B5+K}t|E[WGs:fx6dA{~R`;98=' );
define( 'LOGGED_IN_SALT',    'fa/X%OtfbQ/Hj9P1{J6P/k:~F5U^;-~h@L:Z]afuq3Z:8gUR(zn^HE3R`/wvY$d,' );
define( 'NONCE_SALT',        '1]DamV}koM@.VNTt8~[57g:%!5-7t>sj-T-+T/<]DO@>+OMB.by,q*%K90[n?H.O' );
define( 'WP_CACHE_KEY_SALT', 'M%/L[q5I[T~z7QM?Y67!^@@z&j5SG>o$j.)`x.GflBEb$/nIN+x3r{=J*]]Xc/L9' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
