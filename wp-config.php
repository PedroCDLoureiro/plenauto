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
define( 'AUTH_KEY',          'q|,SiFJx)W}+sM8PI./w;|O!@LGBrBxCCTAJ=nT<!^.]7qvUZN,F|![5Ibz&wFce' );
define( 'SECURE_AUTH_KEY',   'Om 4+^3nzv1c))H*A0!k&1Qjc,?(u6E=KV,uO1v^`Oa5[-kWO. Y]@&J>p17?  K' );
define( 'LOGGED_IN_KEY',     'IX>-Dq`TZ?^iMr%!jNSpG`+7Z*^Zt``Z#n/L8pQgMs`kel+SiLC&X;}>1 :Ou}(g' );
define( 'NONCE_KEY',         '7Z!B=QC7y%W@oy;FC]F+5qI14%4yjMxZ3Pg)DlmAMA!jJuPFEr9b>g--,!pZP8kt' );
define( 'AUTH_SALT',         '*]r6W.WkAM8@33- V;[Q] mXbO-p+;Ve8p(j`l|mf*4%T4=QG$@&+2Y&0N;-Z>IJ' );
define( 'SECURE_AUTH_SALT',  'Bv{(A:Up@]2vHNGZ!Y[eY3Usa,Eq~o$*N_A2rL%jUDq}S h(H7k-(7q-{^Y vx3G' );
define( 'LOGGED_IN_SALT',    'Lm!/la)!f:d8#uHuDQsfr8gQ!el*W<pDjmf5GI1=(,38#;7wT/8mQ~VU1}}Ut&zn' );
define( 'NONCE_SALT',        'f>/)fy{D.qk>9));=tv~VPV}IG{SMY73Q7yFYw*R9}{p~ixTZ^{5[LF 5Wu+;#rk' );
define( 'WP_CACHE_KEY_SALT', '`6$*d_D:btL`8UZU4gZfnqxaEk&(E!+!_:sRaUL=kF/>T+9^f[M~gxOt%kK#Ci-7' );


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
