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
define( 'DB_NAME', 'depuracr_luno83' );

/** MySQL database username */
define( 'DB_USER', 'depuracr_luno83' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qP[X6H2L4I+=' );

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
define( 'AUTH_KEY',         'Jnp[_&mHlf$^tOJiH,:|FzRt*G5.2B(,m(k8+>/2;!erRPXLs v4AkX+oR:/z*UQ' );
define( 'SECURE_AUTH_KEY',  'fWm<AWL*0:DcE`e.41MiTFDjj7Lk}cO)y~ZXiXSY{!H53F hLOX+7B3;dB>m=H-z' );
define( 'LOGGED_IN_KEY',    'Z~s4-vXnNv1HqJm&fWo{680{ZEdCKMI5@.bq-hP{Tn7eN)l^T16aercU/=b(KrE1' );
define( 'NONCE_KEY',        'zY+o}]u$E+~h9@ZC*Ny#u+hbomn/a4p:?Xs$=,]$4{$^:vpCld}rL S@3tx=ombI' );
define( 'AUTH_SALT',        'R@?]g{OT9*5F4DwFSk=#H7#(.x&Ruwhm(%Ha FR^3v~$6s g{WUCwi1;np%Ie ah' );
define( 'SECURE_AUTH_SALT', 'q6_DLi4C r@zg.bpu]J^C@q<;k*8RQ-~1H>B62WMQh<HNI26(?sm=r} 5<~1B@9[' );
define( 'LOGGED_IN_SALT',   '^s?-Z$mM`e]%W)<mh=RbU|e]Ydz>UJlF3m]Z9}Z7xAHI1h$pos9so%zFu+o1<NC)' );
define( 'NONCE_SALT',       '<[n3&qZ=]Jtk6c8Wqas}G(VZ]pV8C+dGB~7q2Z*94 y+- l@Zy*?9QP_ONqS7*pp' );

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
