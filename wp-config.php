<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 's1006090_pet_angels');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Y3Xk<?bs8Rv/GXGB$OYEx6-?36:3<WNpkenJea}E]2i*RFo8r}sZD4Fl]{>kOD.(');
define('SECURE_AUTH_KEY',  '.mX`)#gXOkQ_kE,6IV&<vxTB~EM^>9ffYV,/ih4y_qsp5DGf}b2+<&&hWrQM@`Dy');
define('LOGGED_IN_KEY',    't=IbP{+mB{x0,ws))/c+2ydIb*htr`*BS@pIgvq!4FS_itZ,bOzyZFF~2*!d{h7Q');
define('NONCE_KEY',        'QS:t;6Fi?vu#M?5cMJMh(zci,gY2$tt>p~dw?q+}6%SurG1-G/r(Ia8JsLhN0#R}');
define('AUTH_SALT',        'cQ{(GXC@6WV|Yj=._Z03a~,7bD1*bD>Y&u[;4)^UfC/#<a=1{:<dCgY!U%yh_akE');
define('SECURE_AUTH_SALT', 'Py7k,WDuFCY&39~B3M[RndX##>Tg[yx8hEm&QjUUucd6oGU-BA:,?J_ng0k** > ');
define('LOGGED_IN_SALT',   '+sZ<.J._6)!dUG_IEi?HqRhM0&xa<8%$N7hU*T<Z&)7vY/+*wS&C/,%ccF6y?F9?');
define('NONCE_SALT',       '$Q|pCx,`7RPosqghxK(g$wX6X@rr5akQB_N(gt88AXZ;kKNf-#G?qLq28qj%wE6,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'paa_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
