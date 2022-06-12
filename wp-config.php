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
define( 'DB_NAME', 'gsquared' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '/bx${Vsa#?sASdZ6ioMo</`I%&ST+c4yqsm+_i8R|Y<53U|rwX:X0!>j8h+ikpx6' );
define( 'SECURE_AUTH_KEY',  '(FV%VQ&xF[^oTo_1C s-M)>)h1|-k^yQHv,_hM}*i_5/!7R#wfqkDXyt|u0yv(Wk' );
define( 'LOGGED_IN_KEY',    '(2)[~BM/Vph=P0nqFi/I|(=53NO.3h2|y8K/~`df;j*hdU#$skmtfck<ZI!f:8=L' );
define( 'NONCE_KEY',        'b%L}TmiG@tY.%C<bXCui|N .k)>3[)s1GF^.i8%Oo-uV. %)6UJK/u:QRGM%/+C]' );
define( 'AUTH_SALT',        'F_u6Vr<j<C3LV?rzfy$^AZnfEg]<_-uAS-?ZF~e&{Z~<{>8[pL3[U/a3%]T:V%p>' );
define( 'SECURE_AUTH_SALT', 'j{_ y7&fQ7/JgZM`4YvqBKG./tNgL>ra+=K7yBhk(469k;Yo7s[/ y o4n`bc`?,' );
define( 'LOGGED_IN_SALT',   '<d{|mLDp+zq/?E8F=IJPEGNzwj6jY3E[AJ`;8fcvq(|r}:O+0^SxB[Ldu, w-`6i' );
define( 'NONCE_SALT',       ')|:|O%%i1?qmu6$?1Se/K|U}7GU=SroRh-nPfIzRTKwBGq3g7xu77IUEhvm(UA`6' );

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
