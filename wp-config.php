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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'exploratico_aplicaciones' );

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
define( 'AUTH_KEY',         'n,*OG$E`A;KeTh9WxQ`c9]Ih(YZxirsK?Dw%cVxG8<1IE^bP)F;Tj.#$$9Bm^}N|' );
define( 'SECURE_AUTH_KEY',  '%]dKiFxafK)eGGMS2XPif8kAvtpZ79G96M=UT%)YKf |!` q`sERAX(w+o3Ol^qa' );
define( 'LOGGED_IN_KEY',    'f5@PXl~ wy?PqJBiz+.4epW 7v(pK%yCf#jZkl[bS!!G^^Lf2#pr$RQg]hkdaWu[' );
define( 'NONCE_KEY',        'kr_?LU|NaVW)Z%]Q]F!vtOi@],@b=.(j3Q#T63}^t5d<] (B6D;!? Aoj ;W3.ye' );
define( 'AUTH_SALT',        '0VwD6Qs)5(g/ZGXd{EwyN3>RW<eWipqXqh],<QE!P_8@h|RcNZNns{EjKzb*Pf}^' );
define( 'SECURE_AUTH_SALT', 'VsL;Uj`[kslQq1:|$;Xc<tJzB#15B|mb1oRiAyG -~Hn1#pR,Jd[c<R${7Q640ab' );
define( 'LOGGED_IN_SALT',   'FM4A~@I|z/$$x(i`i-o )uzusEZ; N@#AP]V{lDp2sw8isu=#X$YXV:<ji2]f4!c' );
define( 'NONCE_SALT',       'qL]?puWL_`1 {2lKZ 7o<rdBVDGBycMD6[c6jRnN;-xapANN-_KSKTU!`ATT.Gq[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tm_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('DISALLOW_FILE_EDIT', true);
