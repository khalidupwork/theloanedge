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
define( 'DB_NAME', 'gpofyvte_loanedge' );

/** Database username */
define( 'DB_USER', 'gpofyvte_cms26' );

/** Database password */
define( 'DB_PASSWORD', 'DB-hello@2026' );

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
define( 'AUTH_KEY',         'Sqzf}aHhK$Q1ZFQ>rOQdOXl*In9w&MnGo6Kh#ef;}X-Pmz4l@(C) #n2k=w&,vor' );
define( 'SECURE_AUTH_KEY',  'G3NCO$p}aT.[;/VmX4LwS-B3!tm&;Q#i;{H!9kLS8z%5=g$<nu-IE}maMOv!v4k5' );
define( 'LOGGED_IN_KEY',    'e1x,1FdCk=&bW3zN`*UB:3>sha r5ZCo+n*>LvqCa2s`||(:B[9:U`$1k Oy;Bu:' );
define( 'NONCE_KEY',        'uJgSIb?&t$B)$LU8Q4&#UxpcusS{:_Dyw8(MNyu#L klsOvi~5#t=Nj]PW,Nw|{[' );
define( 'AUTH_SALT',        'T2pw|b]?xyQZ^4^R-wCdbXLs|SD./4U/cmJN=peF}d0)_5 (kapKgitF<X?5S)%j' );
define( 'SECURE_AUTH_SALT', 'paTerv#F$.oUp#}w!N^$!u$;$,Li>j6]8F<_>U;nGQNC7cO1Hf^rRXd3N1OL+Q#Z' );
define( 'LOGGED_IN_SALT',   'GF#8s~,uAAr}G]Y}xq^#mj2&ie$sSE&X[m~j0*8ca`qHuXG]ODpE]Yr,eLoXYjtQ' );
define( 'NONCE_SALT',       '*ozgp?$R}0ei>MbkXJuw_yN7@2cdELhq:ewA_G4ah7}0m{~~gPe5+3f*^P3P/e.u' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
