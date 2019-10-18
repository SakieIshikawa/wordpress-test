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
define('AUTH_KEY',         'ljmCN3XxP2l74hbK8N9Z+3FeSCk+X0vXdy1MrOZleVIkjuH3sBKNarQ+HS3lQoDtpfeob584RfVKfNSrgp8wuw==');
define('SECURE_AUTH_KEY',  'F5rBzNgQRu/y6QC9MuViDJtB8IFhsvfa4AXsb1pWgnvqVKlWnHW4Cd6gOY/zAFo4hHynyyldgPDMR0dNggegaQ==');
define('LOGGED_IN_KEY',    'nSQg75oH1UL0IzpE6BMsiwegWRnRNo/CYxdjNZAjbZyIj75MOaRsTjNYzonyKJeQixIsqfHyfbPYtddM30+jxg==');
define('NONCE_KEY',        'secmOTY5azDYhxo+Nr3abdtWV+jsuplE7ml1Ou3ZoSJ3qryIcZw0MhDtDD9IWKh7yzN/Of3NwGqkvTBViWivaA==');
define('AUTH_SALT',        '3RMMhyxHKeDKdMhYt4Cyiu5QVguj/6RuHUiQbokfoaLIBxh8r+unwBh52lNCNWZAxMHx5rQ0bvsB3/H5SpdvqA==');
define('SECURE_AUTH_SALT', 'FW+0t9X/MbqoVLTJw8qEbWCUE+YwyN3utWy3cJiJKmt+z0Tt768HzYoFiGLqSkIMxxgbLBJ/5s3402hqTyoNvg==');
define('LOGGED_IN_SALT',   'di2crfwbZnJjCuaviG+TSRYHr88uknLfk8PBA5U94pdw0ke1agS73sbK4/W8K1vmEq5JAiYksl4GpR8QKoMnlA==');
define('NONCE_SALT',       '0IlU9Z8RiIIIaqdA18bUGk1N/OfHmCVgtK2GaxdarNdw5icF0WaA0kispswGxvUe3ohLGSzgAwPQ0EpZOn60ww==');

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
