<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
define('WP_CACHE', true); // WP-Optimize Cache
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
define('DB_NAME', 'vokasi_perpajakan');
/** MySQL database username */
define('DB_USER', 'vokasi_pajak');
/** MySQL database password */
define('DB_PASSWORD', 'unair@2015!');
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
define('AUTH_KEY',         'vetF8z|}h&W/+Uyo@MgI0I$l~M{A?@p%dd#mpr#wcJ0Q&3[<AU.1.}3BYh1(+ZEo');
define('SECURE_AUTH_KEY',  'C8Kl/~(9:.wyml-nk)#`Uw>b~S-z^ (,_oi3c&96PY5pUXN{{+_QO{N8JAomlyK(');
define('LOGGED_IN_KEY',    'rnGb/tL~G}gqUgvl=5m_q-<|DgH-mB)x 0w$nXf|J%<>YxFe&:4qyLJ-+<Kz_GR0');
define('NONCE_KEY',        '7]_KSD>&6<K.YdQ,g7?Q8@>&Rq,;vrSq81F~4JE4*Fs|9/v?ym`w}jvm`[$;$0>h');
define('AUTH_SALT',        'h[=S6W_ 3&o3sm4rj)NF8Q!Xbqlz:r&t%:G=[hv5i5@u![hSf2&/a]dyC N|ok|0');
define('SECURE_AUTH_SALT', '6_jg!_D;I/xUQ7dBP.0JL`i0DA+XX_dtlNWAh`po-{ r$rYZr=BHDKA4bacj%2;@');
define('LOGGED_IN_SALT',   'wck(:pil{R]:2)37N]mhmwF(#VMgrE`YW+WJ>Y##/ ;+OU8gJvJ.2#7/o hyDi0E');
define('NONCE_SALT',       'i%K}!_.c78C8U!(`<8W.p#$VV.B0n!>6v_pe>+1/%!hzBAmMnXK1U`v%4HU8cIBe');
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