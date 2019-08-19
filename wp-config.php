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
define( 'DB_NAME', 'wordpressdesign' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '/Q_Cr8@2S{zO=TX;yl4nmq23uj1*OTTX{A:)!i|or59z,JU%P/_bjw:m[f|/b4jG' );
define( 'SECURE_AUTH_KEY',  't|]Z:qj*}[ewR:H}GNIRRtJO<hAo?FUkb,dL=$+{-d!qO[i,>_BQj`z[ZDfQqn4b' );
define( 'LOGGED_IN_KEY',    '^p![AAHv#y+(Ok%1l9p^)P)or-W@}@9ul !=puNKC@ehkn-B^K8tnph_adtA3dpr' );
define( 'NONCE_KEY',        'U^,oNKR$f~sS :Bo([ r]wgL^/1iMX2lUr#vt L]<x6Z-aYJHzis<d>+]^tM&i5>' );
define( 'AUTH_SALT',        '6B7z0i,KReby+n%:rG}^^`mE9t#B:mT#fOhGR!Fy9RTMos>N)Dzr#lF_XA0xL@7-' );
define( 'SECURE_AUTH_SALT', 'U<w<O`-f8r,r>.2C}@~9ku|C07sQ#N7,syVPLv+V[*JT0)gcbX`oFp_pqX(Z`Z)=' );
define( 'LOGGED_IN_SALT',   'JJ^OMAv=)lH&L%$_ON3p&8e,YH;U>x4c=/L61}L&Qcw.hsB;^_UqgNxk:a:F&@L4' );
define( 'NONCE_SALT',       '`5<7z?~=?jm0+RSeoTb9@:aQw~VmRci6+ nx2#AmL%h>)T7I6z1$XXUN+KI$)qqI' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
