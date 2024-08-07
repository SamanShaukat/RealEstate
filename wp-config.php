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
define( 'DB_NAME', 'RealEstate' );

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
define( 'AUTH_KEY',         '7zK/1.K$<Td>J6^Ssk*Qd;6<dE~%`T*4i;}:/rA9W+ DsQb_}c)^iyx:Ggho3^tQ' );
define( 'SECURE_AUTH_KEY',  '$PjYej;&a(3b?%4Ulm{wCl.mcOaF9TC-DL<i%OF$%imf1?PwjbNX/(a2G=2cbC]e' );
define( 'LOGGED_IN_KEY',    'V&~QVRM5b#.rz%-.3btKsi;?,!gftyB.E95A##o1%Q(L] 8[5[j#j#g#oYDprR<N' );
define( 'NONCE_KEY',        '9J!c|R,EGI4 #)L^6DgqPr wM yeJu2N4Z^h4t)n*7=`V~.70vww}d,KFwVenM5)' );
define( 'AUTH_SALT',        '&Po+[ID7+9mK.3~EraEMZS&%1GCW<+{vRH!~=W=vxI/4|S(N<Xoq5^e:OCHi@#DQ' );
define( 'SECURE_AUTH_SALT', 'wdsfnqUs;o6*:$i;O!=  >0=ImZ6?[:}b*c3yez7[X`jRKbykZjRcSNQ9heGRFq9' );
define( 'LOGGED_IN_SALT',   'Zn9D5{PG2DS(SP/e snHC+24^%`WRm.qa2K`Fh%lhGL#M2(c,d3q[tl9m(#27FK2' );
define( 'NONCE_SALT',       '*S_f~Hp#{^|rgjYa&}Ux{{3S6xaQy73o-.zRj97`Qb=i*%/^L+#{!1wZZ&+cPBFH' );

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
