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
define('DB_NAME', 'coca');

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


define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_HOME',    'http://' . $_SERVER['HTTP_HOST']);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'i1Iq9a1Y]<Yiej[>Q}uN5w3;V61+RZD%iS<)LDQoUW!MNU.~4$;xli=c}D~._H+D');
define('SECURE_AUTH_KEY',  ' ^%C4=^~R7^{@L-.*,_R<7i%@z0)o=`Uz)6D?f%Gh1UC_jt7KCBO$YY{U6g|khPO');
define('LOGGED_IN_KEY',    '-vkt23>GycS;!m,zMUC(e,aa(;AiQm SQ?CI^NuOFtJYm!XWtmz5.90(#lR2!zF$');
define('NONCE_KEY',        '//%!0FZ-?Si>I&2cZD[0?9SmP`,{654MgT_`gFTKvdDxhAgid9GZ-K~`[-=@[8R!');
define('AUTH_SALT',        'cE6%nFjdC1 Ey%Kz1Jku$j.qzk%D>Ru!URY.^ak V{Y]kdhX7vC))LY(hOA:QJ|I');
define('SECURE_AUTH_SALT', '$a@,|&!:W9F3Lv!x7674C.Ddr#{E(fckd]d`(Z6FonpdM6)DB}C>/{25vA)S:&I?');
define('LOGGED_IN_SALT',   'L@S1RLMH3yi&.Rbl]&+.&uA=V%$E=`8=NsN-.*(ujhJ9EU{j9/U<++/)RuqbHv<(');
define('NONCE_SALT',       '9{R=E~g%Y3f6iF3tP 9fHLp!GyAf|Uv0SDHH$h21Y|G4ffmfOQnMj6&3%o;54C8(');

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
