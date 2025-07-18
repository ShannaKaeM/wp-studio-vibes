<?php
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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',          ',!{yW=@^kR(vVf<eLo[`7x1Fb*@eR=A*mcFkGPG[:vZBY(:p2v<o;t@}rT^Ldx3x' );
define( 'SECURE_AUTH_KEY',   '}-0^`;J aH;8jd%LpeQ>n;X7J:U#w4fKZw0Ibn}BVJhsY,Y@mL_Fb=VYCkW3wRq?' );
define( 'LOGGED_IN_KEY',     'h=DY=dUZAVG&mk,5,<Ctjb8fLc|_z,:%9#4t~RU02 ?Mp;O$J<O7k&Hio /nouBb' );
define( 'NONCE_KEY',         'T>S95(+(CVOs_(4L<uM(>vY<kU$+$EQ6KsC8rnT~<?@%qoqzZXU7JQVdRFh.v,[|' );
define( 'AUTH_SALT',         '^e7=5/X2X=/!6;HN%]oe67qf^($u JWEme4Jz;I0BV.DRG`tpg-cbc{yBsk3jaTi' );
define( 'SECURE_AUTH_SALT',  'D&8SisyGGc]Ett?tq$St{g#Vmgp{+v+JoAw@@0uAw.MI!eo,HX_=jo>@tgQ|H~a?' );
define( 'LOGGED_IN_SALT',    '<0o1r7$-/dcmZRcb<7fOi?`$[,)>,9!(RP&NLWo>$+u*[`Q$VXIM:*IJz~zk0E]1' );
define( 'NONCE_SALT',        'r$si.}4` /q75Pb=z#Xe<1/x1 `t:6Sp3BSDzylJbIWS}z+K&Zse{KCh[H4r)M{U' );
define( 'WP_CACHE_KEY_SALT', '5$1>O4<NMa65bA|5PXil&KN>t9druok1h3B=]{TlmkFwd~H~%gGpRONbc)fR^+C}' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
