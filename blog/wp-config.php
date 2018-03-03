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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'n10002343');

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
define('AUTH_KEY',         'HA>LV[^|X]HyUaE~Sjfve[rRDCcRnVQpIZ{t4N$te<}hAZg])_;K cmYC|rhp(e-');
define('SECURE_AUTH_KEY',  'cGB:UMQj-N[+yn~_G9-Mk?*~m9!KG 7-+R`6 kI1!-g(=G=@(BHIbwomf%s,X1W}');
define('LOGGED_IN_KEY',    'hfXH!jwy-h]m%gnxv^PTfnEl8U14iYTJ,cjrG(O/41|mysG=x|TrR D/gNy,L>f3');
define('NONCE_KEY',        '0!+}Z,nBqPj,RD9AoM5ALkvoeeu9t?Dd)C1vjhfFj=/J7||@#G,<EEk5+Vwm~1?t');
define('AUTH_SALT',        'r~.GZ0z>l^DlnX1|QeJnd0Vzz |1!`+S<k%m[xGUZi[:>:TLGnptVon_bPrItPrU');
define('SECURE_AUTH_SALT', '2}7NK[dn{2Ek}&PGI@ymIzpx++xOnz:>_#s v0:)g2^9F hL-o|<P0+|Tb<_E)*}');
define('LOGGED_IN_SALT',   '}PBq]99Xn||tyPC4o+t6]H%.QKew>n<In^hRf8lmq1-9gH/U+u{lkR+6O(meCM0e');
define('NONCE_SALT',       '{7GR<B+VhT9Dyk)^%Sn!6b|GK|0vc_QGL,)6eJ8?A01QrSy[3bua)MPw6Glz0]p!');
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

define('FS_METHOD', 'direct');
