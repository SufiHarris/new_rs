<?php

//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'f72pHcAqdjN8PVwGm7uLWKPDKnF9FZ2YKdZ0SH8s405TVOH4Z3KdbMumrIPtJdCk');
//END Really Simple Security key
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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u703300074_EQAsV' );

/** Database username */
define( 'DB_USER', 'u703300074_lEKYW' );

/** Database password */
define( 'DB_PASSWORD', '5ON10IWyUE' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '-$.-DP1]fwD+ HQTWY~ece!ZF%(+#{kT2P-}%E&GG]2d>+]2=$YBX&u]W$RhFZ0`' );
define( 'SECURE_AUTH_KEY',   'ie&:4/4C-~QGl,^=R<R2/[+.V>Sn`4MtU|EV^jG-W<Qw7>il/paE>-jxpq6*xOM;' );
define( 'LOGGED_IN_KEY',     'L_6w|AZ!kxZ$_q%LJzIt?{J-f=voH<1PIpwp)8[$ML|v9Jzh}sa:9[iILTJMgcWo' );
define( 'NONCE_KEY',         'dfiS.@Y|I1TMy]:97Nqnk4PFF6(HY~7EzR3.%Q7dG5c_@C1b-WiO{mZX@neILW_]' );
define( 'AUTH_SALT',         ']16z&!HUu3Fc>%_l~K##zgaLm8~Q.5+ /cw(CHVe4JGkPsJD$w<B ~zO&GuO!zkO' );
define( 'SECURE_AUTH_SALT',  'n!>+/_IM.#oP+=@~)jWiuZgZEntl~?NK>{*;iVd23~ `y!:~*4N7nk:s<=UH%EpT' );
define( 'LOGGED_IN_SALT',    ':1 kzSgz#}N%;Qme&/3|13DO$P!(!NCHOpE8Ogz|p>edac6,+MAzuaDl_rRjM[a>' );
define( 'NONCE_SALT',        'yHd)p~/2`g(L i]K^X2IK/iv#F+p<7`F%Z4#sz[x0WM7LX$j=:7BcgP|B O; Et4' );
define( 'WP_CACHE_KEY_SALT', 'n8,j7P]3*m:bF?l7fZ$j]j|KQH3F0^,nd&,hNk-qotifn5.N.4t >&qT3j?`T ^&' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '7afd5e272b8f39c4ab57ba26d07ce0be' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
