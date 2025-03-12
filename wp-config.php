<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cryptoverse' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'E!!{{f{I(NzHC_;0kaNRKTg-:BWSUe.{UrEsHLg4/`:cYP~iN.iI8tU{j%#O]lDe' );
define( 'SECURE_AUTH_KEY',  '`>{F7;rj> IxA~PL`KI&9+`{?_5Tg[l||wxqTaOlGhfIqR$6K$/qGLBv^ymHK{GH' );
define( 'LOGGED_IN_KEY',    'Apw~Dx6-E*HmrrBQgV6=x]1`jN7i<g;1d.y;i=i?flS-huUQnriy)Z^N><oL@Nj3' );
define( 'NONCE_KEY',        'f8,qM+sCIcY$/R5u`V6Z {if8Y=wO4hMu^%?v8lF.a& ^jb/eE{?H~_r8<M5NqXw' );
define( 'AUTH_SALT',        '|Ink#}nFSBV^??2IR5r#QL0wS/sw]+.2>-((?f9fgvQG;Pg%YeN r6-rwIyw`uS ' );
define( 'SECURE_AUTH_SALT', 'T[#ccO]{xan9Nh83V[-wXE9h=y#+V,)aw(aC2rRL^s)oO<}CL8/;y-FA6KIQROb;' );
define( 'LOGGED_IN_SALT',   '-HWMD3=>C!gGFtBf9CEK2.0)aW6av[#+zQrbQU9_;ujb0X$)F1J-{Msvk`Q&/G]j' );
define( 'NONCE_SALT',       '+qJ6Qn=,r4iY#(bp+<qB:}h@C}#LO<z]adY;X1>RG]xX-B?-{EF<&Et|6~.!P@B<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
