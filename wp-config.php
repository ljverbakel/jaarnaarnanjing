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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jaarnaarnanjing_db' );

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
define( 'AUTH_KEY',         'X=R!+`-L1IJ>BhGfi-<qw7DW/IYDO1ujL,}mMQUvcOI=W4HZ+91zZU16Xa;]+7_D' );
define( 'SECURE_AUTH_KEY',  '>ynNY[}woQSB(=-R(uAiAxwW<n1`#2lXdk+U (P||K&HTh<KmW+nQeu^ CHu)3|J' );
define( 'LOGGED_IN_KEY',    'jQy2t+r)n@,K_~T{a>Ax5Vi1wKE=d(ta(VbZHuBG/jM/|zkz JMyY&$&@u<cgjYn' );
define( 'NONCE_KEY',        '1Djk!YLuW3vN`yR.;ka@g%Nz(R#65CS$90N=9#E}}]]-*TqGhBr`4_bSOi5Z7}=t' );
define( 'AUTH_SALT',        '.m3I./w<7dX#mw`ouY1oeAT+]{z0#28e1~+gZ 12$pwPGk5<L!|]u;E&5fP neTD' );
define( 'SECURE_AUTH_SALT', 'xvldlPgC&1cpV%.n?CQ8,xq=AzO) =Et{wud.L6:nPrPQ~,^D?i;cf- $Xop_[Kx' );
define( 'LOGGED_IN_SALT',   'P2flcdIFgi$0Ap|!#(b/e%fTOfrjgp/Y5}7(VG0qR6=xD{>w0L+(=|pRWYo_P:_d' );
define( 'NONCE_SALT',       'h`i7;P]JNf9t-}Vt]N(eN.siAN_otw8DC&+fj^-L9sQrr5873%Z1ag920a,^k7`(' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
