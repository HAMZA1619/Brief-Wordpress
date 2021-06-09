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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ygGVI5PZJJ4pzxWaparjO5wUOXkDfmpg4kau6u03+YZGNzCwZ+YqjnMG7Afk+vyGgM6yGONyDrlCRhMgv14L7A==');
define('SECURE_AUTH_KEY',  'fMEHEWvIAjt+h9z6jyBGAZF/O1uofJRbBP/t8HmGCpfCjQOQzFgm0jC1dmfoudqEose06IhJMsQ8Cb3S4nXseA==');
define('LOGGED_IN_KEY',    'sWny1aQUogL2xo2dBPZ6zNu0+vfWddBbjOtmwyqA/Ud0sKRoGWWZqr55yvi65MxHK1Ymg6MaDOQV3OwpE2ZoQg==');
define('NONCE_KEY',        'mCRWGskZ1ET1DxGxkT2coXLl/B/wowZZm0SjP7zKKrPSZAKdj3uaw3h04y6mPxOv879d9hx4CMZTWAaRJfApLg==');
define('AUTH_SALT',        'pcjx2Mf+6tO4gFfAhxSzS5uI6vuJD4A6eWTjX3rg5HByUqJK+2VFp1Tob+18l8DtMHlwJ3kWwYBI9AWtTPt0hA==');
define('SECURE_AUTH_SALT', 'kp6HyZVtOfnIIr/e8kGrlJomOobMhlifXM+FfBXC+2WFtRmxtfPwR0JJP85B1gJS+vgyPORnXNRiEVYxnvVZLg==');
define('LOGGED_IN_SALT',   'vw4Ah3rOcWnhCgxyHfVcojlOiTuPmjx7pqtwVCmBDUgnn+OBA7FhAYHr+5E1gOnMtR9ebjEx9yWrCt8GcrZGcQ==');
define('NONCE_SALT',       'FXr2lb0vNpXEcXqFYKH6/WVL/ut14XybXZ8XPxluENqmD+q5r2Oywy0vYKR4aaysJNBzWUi8fylVuboy/+tgLA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
