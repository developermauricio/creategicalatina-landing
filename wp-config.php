<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'creategicalatinalanding' );

/** MySQL database username */
define( 'DB_USER', 'forge' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Q2b2TQEDvfeD0jiIyF6R' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[U&(,yuP`Bz5KN|^/eg=J@7kCRq!]16o1:P;qZr%diQ@e!vbrN=iYz._MRx1a~z2' );
define( 'SECURE_AUTH_KEY',  '!&]0[%>M)]sm$hUtMC+u<m12tzg+yd3&$6(_h@6S:!VknPEv-SSV(g>s5k~SHVpt' );
define( 'LOGGED_IN_KEY',    'Xa3I8+)N<=tVop5Qlg]}tQ~w?ay=3^6Wt.(tQ3-tqCM4Rn0:|g{[Gg^Z!16;+Jo8' );
define( 'NONCE_KEY',        '7C|pp^Kj-Ky)U!VEJK_.Jrqoq36Nb^WIj5MoTR;/ijBZ4&{%MRIM:<xzHv*8:mG2' );
define( 'AUTH_SALT',        'L&?CRlHo~%o2bjc~M%]zpjP*+#UR(iYFo|atL)~w=rQY2;yQiC~[Ri<v3P8:R1|b' );
define( 'SECURE_AUTH_SALT', '%7*x&mH@asWB,/&>-W2&aHFy2 WV2$]D+TZ$I}%{HkDu8sh(rZwp~t2xst]L&dI_' );
define( 'LOGGED_IN_SALT',   ':i;qH@&y#X0Yi/ZiA{sA:C2y>N(fg0?(RuE5jdSB3*U;V||a$W1hy(vhsnF{ZWW.' );
define( 'NONCE_SALT',       'r]ixP#5gBmEg0%J:bO XZjEr&s[f}rf< i(m#Na4F!%[BzEf[xnXz<U|GAam#*`4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cl_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
