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
define('DB_NAME', 'startapp_wp381');

/** MySQL database username */
define('DB_USER', 'startapp_wp381');

/** MySQL database password */
define('DB_PASSWORD', '31S6@pDe(7');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qsuzkwrrcupz7wpij9xhkh4u2s6li8gy9jbx3mcyjl1lthnhajf1gbngwpom4kpv');
define('SECURE_AUTH_KEY',  'ghy3o7fvs6srrzoygtes3m6vpmln0kxr3k1gihaqfjx61g6gsbkm4yb6wab5nfid');
define('LOGGED_IN_KEY',    '03ehnyciwb7ova6y6dygyenrdnaz0uwu7rtlzi82d8d4nakkpcv8qfr1ddndt2k4');
define('NONCE_KEY',        'xk6aisyhan02cr9n2q2kqghprnytvu3c9dgow96e3rnhekydyhvcmsnk3kfg5uyd');
define('AUTH_SALT',        'ny7tsd13cb1wpvpyiv7f7nm8bvrahyr5o1jxdajyh5gnoe0bp9k3jbqf2lhovs6g');
define('SECURE_AUTH_SALT', 'm17ztcd7wpkmouq3igiqmzqyx9mbsjikixdw4cr46fgzenynadoa2kgzs8nbmoim');
define('LOGGED_IN_SALT',   '6ihfkx5uok8iwj0ylayiuizvvgxqq6sl4nqpsjlvhymsllwsbudy31hmokxxabzd');
define('NONCE_SALT',       'u4a1yvmkhrhsu8f97les7krem4swfpw94jdhdcewztzrnflb1kpovdzoxyy1tbi5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp50_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
