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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gamejogot_db' );

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
define( 'AUTH_KEY',         'c&Z[G0quLbM)P&3$Xo8f@b}1w^jb:hS6cO} 1b`kkx0QYxOOK4tSYMbb97{s-hQO' );
define( 'SECURE_AUTH_KEY',  'sDQ)-c2JlM<VNV#jMou&#Vv@hXi^{cLIM)%_NH(SFYyY4Ax$5Y5 *#xF{=n]j7rF' );
define( 'LOGGED_IN_KEY',    '3w@xP;&VBeGfl]|d3GP$1WMl*s+I kaO{)1nM}~(pwGX5^q}@`_8tT4)CQ.GsaT#' );
define( 'NONCE_KEY',        '0uW^GqD..nX2N.#4yNJlISG3&_8/AB;u-83u-A}lhYIOCG#q 0-/a[fUn?S+Bs4|' );
define( 'AUTH_SALT',        'Sk-IFCrLWk&KLFsd?hNPwj=X[nzG47Evih:A.Z|5Gt[$qOkwAb*Q:@u/r>u;&2:#' );
define( 'SECURE_AUTH_SALT', 'vIJ?)i.D@=FgNEy/n|Z)$4oX-p6U_@_z>6YuoK52;4&Nlj?u2_BYuJ-W#uPKWlx(' );
define( 'LOGGED_IN_SALT',   'lMSW4T{Mdr-H+|(fAev`M2Qyq8#[&D%2M]nUXTrlE`[5pB9~Bpv.z};LzHCw~BmO' );
define( 'NONCE_SALT',       '?mb2xO[>CT-_A;p%54+CbG5^WOhpS@ kU>r_u`_>8v`~ntLf5!+Ck2Cf0=IyCn66' );

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
