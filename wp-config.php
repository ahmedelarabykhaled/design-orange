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
define( 'DB_NAME', 'orange_wpxdlab_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'O]Z^DIl)xmo||Hi4W~Mha#)sKE4o{`%-ijo#G^dB=e0tZ4tWvIDE_RtHOXU>u4K~' );
define( 'SECURE_AUTH_KEY',  '_F0qAduXBWUsJ(EJvoT4Ef=>Xh^e{c1Z&~eQ]Nh/8-x1OM;CqG4YRb>Ow>1?e;Gt' );
define( 'LOGGED_IN_KEY',    'Qs&tGn[oTy#gZb{ykv!=u`;NgQ5:]VIw>a8_rF]<%vuG,|j`29{;xa2@X;ulZ>,C' );
define( 'NONCE_KEY',        'UE|6Cv6(o$~3I](a6/piR0HcEo^jHv0[L#;3<~Oo:COQ)dsH6E ,lZ=&9C{ReY1A' );
define( 'AUTH_SALT',        'iRUP)Go!r4apxLlY>/N#>~gn<Z^y.jU&Us+0DOq*hr0!wI`t~7Ff=W&:%/$1R1;|' );
define( 'SECURE_AUTH_SALT', '/&g<B?vC#&c=!-d|,O-AS@x|zpsZF;WKIpS|$I%_>k+b`T6@Dw.ZxL<3sC`uK%2I' );
define( 'LOGGED_IN_SALT',   'qWeuz0o=SLdSpWKA#FK,Txl63F?O0csjxpaV7Z>ps|hr0:13!ySz%*6567Qoza6,' );
define( 'NONCE_SALT',       'mD_?&t!RRBA1y<``>MYS%P`opa(| ^78AD3l!FATpiLVmM{]HfL@16?=:>)R3}_[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxdlab_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
