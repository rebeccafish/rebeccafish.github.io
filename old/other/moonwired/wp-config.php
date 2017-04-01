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
define('DB_NAME', 'robf06_moonwired');

/** MySQL database username */
define('DB_USER', 'robf06_admin');

/** MySQL database password */
define('DB_PASSWORD', 'Admin1');

/** MySQL hostname */
define('DB_HOST', 'mysql1206.hostexcellence.com');

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
define('AUTH_KEY',         '7eW1c{.PZ{UC!FJ<K-9L;Mfr_g2$a7|](gCV4-0sNg/.qx:KZtUvC<=xFbDQ8=K9');
define('SECURE_AUTH_KEY',  'Kd!571]%*:Dc+n]nU.~rqiA=2:.@HS.kkGe<1$Y^~K&c|]SFu98zFax101U&@P`3');
define('LOGGED_IN_KEY',    'L1+jxua@zLjzFk|po<mXCW4~hK|CP3.oJ>{R.C/B4x|5WNS|zH+u<np^8M^F4]40');
define('NONCE_KEY',        'l?|o}hp*;[JhoX$+C^*mC1%e|flBSGD{P{Cf&.:FRh]Gvab$-[26[&OU&FF5A#qQ');
define('AUTH_SALT',        'E,e6vz~:Q+*P*Hn}xNq.Q9MRA4o9MOmxj!w?K8&i-nillRk;$~:mFyR0>DPg4-aC');
define('SECURE_AUTH_SALT', 'Yzv,h%Ou7)P):])!S8mZ%(R-VuqR9C2c5W5h!yU;uO[6mA,53}-T/PL+_+ZYF,k?');
define('LOGGED_IN_SALT',   'dMc-!HfCk:h;}5-Yb;RC|10gIY9@:2WYE+}lhzHJ-nj*c`!5@!G8W<kP4}Lt(pn|');
define('NONCE_SALT',       '-|0W[=to[MyKeu.NUnbagUrJ)ypbiV:fEI/y0T;2)tL{OC-Vp@,cbJ*|(Cl};f:!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
