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
define('DB_NAME', 'themexydb');

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
define('AUTH_KEY',         'SCmi+=[;0I{zq {`RxiRCxjL.CS?g5]%p.nP|}qV;hwHjHFU^2<7h5E7;|J(ORYd');
define('SECURE_AUTH_KEY',  'm^Xvy{L73{2A!QyoJI`a(hYGt,KePvLXL t$6N]ewdDxHfWF[i`k%np2*fuk[bWo');
define('LOGGED_IN_KEY',    'ybFe^eZX[;g$8Vr|`JU;*(-Rx@SVi*q%o pKLJ4k1eN R-nYQy533dWf* %EeU)0');
define('NONCE_KEY',        'N<qHWf) LD<y(%-M8kMHZ% .j%!Ph|B&xXqA,#&|UesSkAuX[!_[g3FE+a~nR3A5');
define('AUTH_SALT',        '({@ <56`}nS^~-$z2Ggogc!N<r0`sZ]8r+%:h ZEz@Cxa$hPvJqv%+9SW$ct`F6|');
define('SECURE_AUTH_SALT', 'dcL}GCZVz@m3L%#[Y4PG-x~{9zN$1u@H@X)}(rdjz~pUH.X2^$kcDF<(&1ie(vxR');
define('LOGGED_IN_SALT',   ':oY;DY-dLp_{++Q@Orc&AU!u+oLvLZE)=UCx1uJB+O~FjHKz~H>|j};{GcxeT.(Z');
define('NONCE_SALT',       'gA|lx0^0xk&;,*$_z~v<)wrLE<gY${WVXq2oG!Y)!=LY#aY(F@U:`Id9U(}a0PF-');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');