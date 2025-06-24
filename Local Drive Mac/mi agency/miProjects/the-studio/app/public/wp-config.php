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
define( 'AUTH_KEY',          '7 !MK//i90fU$Z)AzV:e<moSAai_}}h`u6Wr2E;A+#tM6nLq^_WU|[^fv.)5:F`8' );
define( 'SECURE_AUTH_KEY',   'g]30[]Q[?`P7?K/Auz(MD5D#&E{[eiYCa~(,b&C_JN_S%|dYEJIh1}:zv:~~yNHS' );
define( 'LOGGED_IN_KEY',     ':x.%ozFg4Z+w:EC8@*yl&+y^0E+4bQ=q_]_7|A8,X[[:z7?o|,6brp8#~<Q}lbDS' );
define( 'NONCE_KEY',         'g`+W|hB1N:vr$z}}[q30b!U6LH[ei-V*dSF Z5-q|GLY+&5:NDCgMUwG7KO:($N)' );
define( 'AUTH_SALT',         '6J|kST2dw^s~|&r Vho?81i.7w.n|6,eU!Q9s&!kNYR(95P-n]#@TK?*5r&o3t.W' );
define( 'SECURE_AUTH_SALT',  'LA()od[i1aRHK7:t2YFnuh@SR!d!A[$_w$VlG<qGznA^e0Ja1;IL~8{%1#7<Py>+' );
define( 'LOGGED_IN_SALT',    '} >0Tre5K7:eB`1f;o)hGSRJs fcq[|/Vbx|tk`k&u5EeORp2aMUQA3l*QFdsQMt' );
define( 'NONCE_SALT',        'O`RP9#Ln&/oJyud^8%u5oMFC0!2nNxLy|5rdWpkiNoJ(La$OvZaAuC~BupYf>1~U' );
define( 'WP_CACHE_KEY_SALT', 'In<UipmOVEP:wt!,Fv&<Nm,Q&IOW<Q p=uFBO{Z5,ouRg&a. G@fW?^q4vD2T_U$' );


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
