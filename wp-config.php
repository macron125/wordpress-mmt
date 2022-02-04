<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mmt-hospital' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Eq*gbw7|;4kg]$-?ei{@J?K, T<ZO70@mT [Kezg-tb*%E.l4p!}5oG(|[vGL87b');
define('SECURE_AUTH_KEY',  '7Z(Z4T#1%[uR=+Su82_gZ//<rU1C_ieLt7z~vfNI@*m/E1:;u,|Y$MNt~mp2*.? ');
define('LOGGED_IN_KEY',    '%X=Xi;LJ=[/F:-H09Ym47YLt>eXFK^Z{Is-aIRw|{<[`Ljh uwWObw5cE)&kY.ac');
define('NONCE_KEY',        '&3+xz7H*rdV&yO,[64gkvQrat>e&)+s4Jgjh2/!c<rV-I]_nt}9(JKIF#%7^e/v/');
define('AUTH_SALT',        'D9+5A8UWc2LZ,yTT?{f([pl0tfNtNMhE.ct67G&<fTh!`Ju@W}]|kd#-GvhGd5<O');
define('SECURE_AUTH_SALT', ';-d$_(pQzXHgZ5yq|{!?fy2_6q^(p-e_BC6zJO4eRI?_+kN+iTs|o-nMr&S8|1XQ');
define('LOGGED_IN_SALT',   'qFd+4}Hn*e<t#;;TJWh%)(fw,|E2Fr9Z-E;q0#GFJ)0*,2lUH1j0<u`h5uHY_byh');
define('NONCE_SALT',       'f;gU/xl#5-E=wbb>jyys);filjyNmrN}U7zu(mcgbru[Z1F.y`:f5<)cd5qp7`F6');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
