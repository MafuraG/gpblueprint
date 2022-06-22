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
define('AUTH_KEY',         'TO1bpawb6o4w67Ft5xfELtYFgKPEAiKm+f91rDQJxbp9TofmXLzup/GTp38zas5eYnhIrAIGi1UM5gb+oSQANQ==');
define('SECURE_AUTH_KEY',  '4NG4q9rsc9KnNQSNGsj3oFv4Qx/BudlfHVa4DlzH8g3g7g+/SuEkpqNaLxNTrd1n9g9s+XrNrlzuxce8w0opnA==');
define('LOGGED_IN_KEY',    'rxzFVZBjhq9nHnmkA3rPrRbrr6RMu8KwguGvT7wZvhf3M5uV+qqGpbsIBDKkpxIv/aw+s4nmotHc6IcU4Nz1Qg==');
define('NONCE_KEY',        'IXYl1RQ3CvAaJqkPt0+9lZb/Hn6n1V2W3PkV92WPAW3wwAzqwJxUTNdc5ePBKfeLRTE9k1YyRqC1fqBexmgaWw==');
define('AUTH_SALT',        'vzRZRgEkP3YGN+u2I5VO+eG8HQl6hB7KYL3Y30EKK54bkbY60AVQPCDQE3TC17kOM3rxUq6GzJE/C41cKGF4Ww==');
define('SECURE_AUTH_SALT', 'Ez6uZjbHDGLuy6bwoXBhd7FVsGvifFfd+yQHAsoC0FdY9TzwuOJwJEVzZTHAhvY1a596mNy7rUxQNXzxKcr3mw==');
define('LOGGED_IN_SALT',   'kXlDg4nrCsq2vWm7WQQrpPCt1oFcM+RilPBoqJA66KJveLxKJ8naVg9GoUPAkEYvzKr469Xz1ZBHUR4CFYhNwA==');
define('NONCE_SALT',       'h5+J/Uqat1SO5MqYtI/fj4ZZKEN+ZZ9zdYcMYIEpgcBNcEJOAG4jLgtB8OLg7eVUnkcAU2wF47UayfScnTNUow==');

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
