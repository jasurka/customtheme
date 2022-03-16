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
define('AUTH_KEY',         'yHgl5vfvv5B6yO7Hx0vVvDMZqBzu49IVGcjkQ1ttzJTDpm+MA34AHi6aScdr6u3XddMv2tJdpJ9y5ABGYVgqGQ==');
define('SECURE_AUTH_KEY',  'v7s5W1CBFlLmPz0Va71uJxyR+QNc5bVPbuWHjre7n2jiT9+AkXJ46rKDUB+/bVgq9wjZqB73m0sdM4PX2Ztutg==');
define('LOGGED_IN_KEY',    'eTBkv6zI2XgNn3GrehK3YuoHvRGLEwAWyezoxVXznr1E2/Yhd93zAiCZe1s6pqRPfQUCK6EtPl9u+iazieNS1w==');
define('NONCE_KEY',        'U2oiqfk3RTgXmC35Blh5m63MO2BrCroj/cxg2o51GuC+g+UAvttw+vwetnyrBK4EXDgo2OlUHTr1Me8S4+tjfA==');
define('AUTH_SALT',        'aiA+E2W6H1e4GgYOh14LpLsMLyt20DoVKu9DxUepWQXKF07/Ll2lISn1kZNoQEXArmrcJxtv9227JOjEukQz9Q==');
define('SECURE_AUTH_SALT', 'u4uHvcoVv3Pol7pFe4gGryU/EkmxcHQMl1kMyfzvmEHzKpbae1nIh76n72EF/DsqmWJiYRIGDfqg7Jd9FXp/nA==');
define('LOGGED_IN_SALT',   'SDWuCKFzvc2gvCU8c3wf/GNWXO2KdEbST0J/s1lWIbQT+LGsXr4TW/+IIAciBsfuTjTaT9OahXUMWbv28PHtMg==');
define('NONCE_SALT',       'HCCoobmRv4BwXwc0DKiZ3zYDMg4P7xxohZC9Va5zKCTPEovpjVGpwaXkYGSm8Kl35plFF8UvBifo6qTfs7Mc9Q==');

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
