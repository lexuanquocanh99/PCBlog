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
define( 'DB_NAME', 'pcblog' );

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
define( 'AUTH_KEY',         'RECM.e(6,N5`vJ01at!U1#t;8VwJE+W#vp&Po#evd.QzDT{_zx>cjmTO:MlZA}B3' );
define( 'SECURE_AUTH_KEY',  'niLLeo8aSLV(A(%Nm]W0r9YAarI]rq.cEj7T?o%T4?np*EfQ3{Yd^*bVnJap+]`4' );
define( 'LOGGED_IN_KEY',    'iOZeQb]BQViAK7>_`cfX{m<-&0D2<cvO?sQ_?liaV2$!l@N@(|a|HC}lP/arw@rY' );
define( 'NONCE_KEY',        'w2{=:(mT7w2y@Il*PosSaOe@#ssIQJ=C2#==|lOT?7S#5a^O%E1K|&_mugR+v}kx' );
define( 'AUTH_SALT',        'SvrRzsi5b5cV<p{tx=PVy+Uitb[^90DkE8r7TGjB(%F`9.$Ca=mygiMVk:;SEHf-' );
define( 'SECURE_AUTH_SALT', '6UVseY6ceNE@i*+|N4u[@ungOj-&F7LgT)%682,1ZsT~2U0)iSNgo}zmbF~|5|9M' );
define( 'LOGGED_IN_SALT',   '3[aHxD&<3/Hl)0NDtwecx%2?R]-.v*eJK&u@}VZJD96&miT[*-K0;{v2s/9bRC_N' );
define( 'NONCE_SALT',       '!EwX-,7P``IZpqK1c[Z:a; uc3%;S?v&dE?I@7(=!7A]C3-Q}t?f92@)E,zo;g8x' );

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
