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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wp' );

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
define( 'AUTH_KEY',         'O4Q;SI)S$1[+*B)jc[O WKofN ^nkFrQrQ0?/@$A?zdy5^|l@p+8#d2./.y|b3XL' );
define( 'SECURE_AUTH_KEY',  '}eD|>kHcle!~;E|Y~FeGE;P{~Y}i2/)fA0> 0XCa1rgjBXP*ZeigsHDsJ{C@w~i&' );
define( 'LOGGED_IN_KEY',    '.m;Mv1jm`w8zy|sT%C^n>c|gr{=V+d1jM[KG0lKJ?~=V#Dv(q[?Il+<Z-}Cf{%VV' );
define( 'NONCE_KEY',        '{mv9-:+EaWtw[kj>83+b{Co cw[P$q7X^%&P_5xI$?vVF|Vq|C m9HX]*8pPfLd8' );
define( 'AUTH_SALT',        '0S?#w_-Ap}w` G*?T-X2s6WGh)]2Lcb$&klk*[[aHrZ-02@3l<W1hG|&+)vB.Wa2' );
define( 'SECURE_AUTH_SALT', 'ry)2[6RzNGl+7jc-k:bsXaUjCo?[04kRNRfk^8ewIgU-V!>mOfx5}*782j@noC)>' );
define( 'LOGGED_IN_SALT',   'h/AIq(-o^HCg`@/,:TOa{.po?f}d(k2ZCiLR2*mJ_vN<z,9PkC<T l##>VnKWe8b' );
define( 'NONCE_SALT',       'tzt74ANiE>(TW+C^=z5./Ie{pR`>h2@};)C8bN1vKt^GXdOtD8c<5Lh.vjMMB5Jj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
