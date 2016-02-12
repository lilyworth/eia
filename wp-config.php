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
define('DB_NAME', 'eia');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Y<eS+HISUubt@uL0`S=iA,m#p>1Zt|5?1I@}5x3&e=UnH_a7trabyvFxe3wT N2F');
define('SECURE_AUTH_KEY',  'H0cUKW|wK9I#rMZMM3@:|[w9R_x6[Hb5|klk1()0P+}cG,!&+;8?DUK,tIp<Q?i)');
define('LOGGED_IN_KEY',    'E{F;|G^&?LjUuA)Ect?(1Da/q-6{)?$grgfVrk7}d;AiBr>T|_-*!~<wVcg39]2+');
define('NONCE_KEY',        'qYA^lv$h15X>}SLN;!e7]z=*A4hx;di>JcAk{L474C<BO|_w8&f7P-!C@M-.JndS');
define('AUTH_SALT',        'Xt7 z|=u5% _Y)U05F%6HBQMZT}9-/veyj# 6|SSphE[]<rHy[K@L&2xK:OF^(n ');
define('SECURE_AUTH_SALT', 'tB-[`{TnDE</kki7/7qIE#hM|!yEC;%[?(<W;llANwz(f@(A;S!j+w>KBJBI;D;J');
define('LOGGED_IN_SALT',   'i,YlLWz*dpzCk+|zB.(82K3fb-W4g8-mTL/!2{p1(@E=0X /FJ >(G;0#)0=PY!8');
define('NONCE_SALT',       '[6+D)Z{0Y09lIz^((4&En6dQV=X_)Z%VakkL=_1cbjKfM m{aQa_u!)Z-A%*La+>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
