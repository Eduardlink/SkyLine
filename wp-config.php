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
define( 'DB_NAME', 'sky_line' );

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
define( 'AUTH_KEY',         'Rbi]1+G^fb~Y9m!^2L?!I)/4;&n/fQ*tN2t-`1Lk-z?f=h(OPAE+1KP;+gypf/.!' );
define( 'SECURE_AUTH_KEY',  'c?<2f-gL=PXA69A7jG{ _Sr{fP!t`:,axL*d(VN+o?CbtA9:PQ<bHdk*pFm/Dld9' );
define( 'LOGGED_IN_KEY',    '8ro+M-,^9Yi;jqH6UV]{edY061Cu;uXFZ0e}V<%!=4V9zc&j9($VCsV:ivBe>~jE' );
define( 'NONCE_KEY',        'y*Po*D;0z!c{TF9F}UQ%/},r8P~H/Btym5dtID >SRvsl#rmVAfpBdmNtWdbN4fm' );
define( 'AUTH_SALT',        'I-u7&;VxS2eBvXStn*$9cVM_Q4AsP`(V`X`@ZQT~N3XDFOtQ=tYP}sr)saq<8,uB' );
define( 'SECURE_AUTH_SALT', 'n#H{|vhT)a,%;;]uL0KXi+7@o_K5hP@blefrwZ,qmzu4h@yl{;~O*W#K+i>VgLuq' );
define( 'LOGGED_IN_SALT',   'SyOSJF+.r4)0mnfeQWbQtA#(@qu9Q~F6R.Gg#njW_w~&Y4cf7HfA~Y^@dBzv(4_b' );
define( 'NONCE_SALT',       'zqda2<A&7WAaT-gh$8gvZTx0,E(4fDb9UGv:R^hwPQJ{|KrEGQ-;{.PBW^9zfFrK' );

/**#@-*/

/**
 * WordPress database table prefix.
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
