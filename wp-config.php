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
define('DB_NAME', 'andricoc_assn2');

/** MySQL database username */
define('DB_USER', 'andricoc_assn2');

/** MySQL database password */
define('DB_PASSWORD', 'o)pf!1B6S4');

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
define('AUTH_KEY',         'wxcpipxgf4durjoambt29twgsdgrmwqgonrspifkozxd8gvhydazqurglprg1tq9');
define('SECURE_AUTH_KEY',  'brp3hergdwpgub2ycf4psauf2hytopsttbgwtvg4wecefnzdc85burrqjx7stftr');
define('LOGGED_IN_KEY',    'hukenkgapfdyn4cgfsmhl7yaz1a0oiyivfsqxln2llsrvkfphtcs1njwzud3eiks');
define('NONCE_KEY',        'zd3rr3ts81hs2n1n9pzbmrlqjhrc8gy4nqsvwnmh3ghxsbztabwxsvm6se984bnr');
define('AUTH_SALT',        '5jxql0sbhjtnwfzpia9ixfykxyv0vl9i5yc5syr94eizin9ke2tx9fkib1iqqqdn');
define('SECURE_AUTH_SALT', 'wsnpnjupoxq1hhi09vbjzw2o5cdrvlbixno6fz9wimfzxuyay1dazvouodg7s9y7');
define('LOGGED_IN_SALT',   'bogyanrlgyhqglv0gbd9rl6ba9ueh4o9zwbjsgc2aquc51st5mntankm9z6qc7ae');
define('NONCE_SALT',       'ic1wy1bfpy24hujnh3nsm27rgr9wptd680ejih6alapdueozc5qb73u7fade1x90');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'assn2_';

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
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
