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
define('DB_NAME', 'ritz');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'O0R=USn|V:*-~9B%QNVOyKe3.<MmKp|ir#VEW/vs[KhbPBovz_l_-<#p3Te!nL:V');
define('SECURE_AUTH_KEY',  'vunDzd2WF<dqL,p<|^+rN*uh:$);ebSELl#>IhS1x/oU--`JOP$L1XCh&}o!N/|H');
define('LOGGED_IN_KEY',    'iZ`V,T-sHZ`Q$zLg>r8 !afv+AlHSUE$Vg,xk.@XO(:&f5!+U6NjrfU#PLg>B>MJ');
define('NONCE_KEY',        ']_9;nJD(!Zo_|+v<)-M5Uc[Hp@U:`oko4*9wHZ4V)4o+8NCZx@[QLT<=]j-,`{L0');
define('AUTH_SALT',        'LaF|*4uC[kHX$yL~l66`$>YlvU}kP)rh.mO.pajkUPJ{ltwsS>QO8xS*$$6?HrT.');
define('SECURE_AUTH_SALT', '-r@E-Jc|xM53o>-2O8OFd[ n6+S{6gq&?F*n@|-1kKd!$;y)}BLg|]`D!uz07pJ*');
define('LOGGED_IN_SALT',   'z_}&=|Np|~-~ WxkoU(mIE Ml6g8ks]VCGQ1p6X:evu*TrKe=3Y{qK|w.b/A N|z');
define('NONCE_SALT',       '/`.r{)iIsXI=1Svix/k(*_Vx1E~aH&m.eq%uUxoH!3_+xMZ6MV:;+Cj7(t9*{ B+');

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
