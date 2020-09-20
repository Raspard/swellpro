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
define( 'DB_NAME', 'swellpro_db' );

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
define( 'AUTH_KEY',         'eArWNxb<!7>S}20Um97ae,JF3<qQN9K,:_9Wp][nw>m[N9HbuG3>?|j.o8`U7DS9' );
define( 'SECURE_AUTH_KEY',  '-T@y;U>#&;g!U76]3F{)?=xn1/N#FR}9YgKi:.Esj8@w,?S[0OYXFr3%q_`HF>]}' );
define( 'LOGGED_IN_KEY',    ',QeW#fc4U27Shv8lIZZH{fcy%GJ~^#<kElPXkkfz$VRQ,)l-72hE{y$1Djej?+%*' );
define( 'NONCE_KEY',        'cehusW.1hL6cFkby1-zhLgqp{6DujN}ZHrLbw8dA;^C1)uKZ&Q<PQI]v4tBLb**8' );
define( 'AUTH_SALT',        '|b[q^60xcw7bf89w*B]icBuYqi0s#{HaS52$yGRIW2vl3NNHOq-{HhXmo<>^g^NM' );
define( 'SECURE_AUTH_SALT', 'XowDre1cRO l3XS9KPhL|%S( E4 oFmd&fpf#C gqGp!f+UW!oRthNs<XpVQf8z&' );
define( 'LOGGED_IN_SALT',   '#!hhQe|utkO*Fg{|-nC5Liq_v&tU_=#g_EB7Qdx]wEwSL/VjKn[^e!tc?Bjo>`B,' );
define( 'NONCE_SALT',       '.23uugsf/q!(=e+a6|0s/.nj!{R_]CvxtJ#47>H>r-JyE<<F6f{xs[>x@R_Dh<E@' );

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
