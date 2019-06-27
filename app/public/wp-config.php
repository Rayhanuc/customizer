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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'nb5EdnFK30E6IJ90U9gmrPkODjdeTdlN1ExnBZGNgPnCLHPX6KMeNU/r+ue7IKrwRJePUchENxkK8WN7pmN8Eg==');
define('SECURE_AUTH_KEY',  'YpYN/dErdM1cB5K4YRPFoYG/aCWldxcMv+VAW0rPNzicVAzAnhzcIW+wfmUDrOmCvwlVMO2oMNmf+ky3cTCEHg==');
define('LOGGED_IN_KEY',    'slHrJ6GPw05xJRRoCw3YtlobOtqH+yj+3K5JMwYe9WiPi+YvKENmtqL9/squJQPcAzvWS+jHmDDxn2vFWkgzmQ==');
define('NONCE_KEY',        'YtRgR6pRMsvwY65egs9kWroVOG1+vj5T1i7j+RWwtX56lGovd1jQeh6agjXAM16TaY/BnxxgqdTPY3Xe4mpB0g==');
define('AUTH_SALT',        'e5tIGIJbryhKQ0HJ4Xbi5q4Fo3eC+JNx5YUYYGcq8hTHfuPZnIwX6hHfEzgz3reXkpkkOkeq7kw0oaxwBHbn8A==');
define('SECURE_AUTH_SALT', 'mSMapvZTmbEcA47WAVMTqrB3nuW7W1lCAwR2MemcHfcOlU+dNQUccd2WI1VsrVLojP+A1W60f0/UKLkZDsg+xQ==');
define('LOGGED_IN_SALT',   'kwnFRxUIIZvQyiOapjiifya660t4+2iBX7MSyHUf1oRQ0MjEgb/tWftTFSz+HisD/Kv+8/lSuT43+yENScGUrA==');
define('NONCE_SALT',       '1xjXJ+DlCllkDtDDUMoNVLni/S4w99zJ20mLjiWIYEXkjA3g13jPr9CekIteNhGpCpI5bJ2gxKjpLC2kBtx/XA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
