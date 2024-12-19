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
define( 'DB_NAME', 'db_mis' );

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
define( 'AUTH_KEY',         'L<HK$eIrbhK:iB%u[#j/.B4Sj%Hi`t&>ua7d-_.7VRVs-SQ{EoI(||y@@;.I2RN ' );
define( 'SECURE_AUTH_KEY',  'D1zUJ.=$Elm71uA*f}(*VK;)C,Xuf62SM[taqo)Rc[ N?L^[jO|9&oEaG/>XdDrI' );
define( 'LOGGED_IN_KEY',    ':y{`j`Cfs9(,+cq:f<DVOg&Q:a}wD1^JUZ`Wt]|!>UXjl.O_A2W*SOE$eRW02aki' );
define( 'NONCE_KEY',        'JE9YXX,B=91Sj52f8y?RpjM2zy .o/&GS!9G.IuasOP^urz1# _pG]]DeefWwg|v' );
define( 'AUTH_SALT',        'UYiz)cQUA^lj25#.gif/}Bmx@/yQKbg`&#m_Q7<vWkRj<N|=i!{+<ic{uya3p>`K' );
define( 'SECURE_AUTH_SALT', '`{ush3N?BGZoaS:SE)|<=kYmsk21R@YIjCqs*x{}fk*$4B;2L41.DeobUaVOE6&W' );
define( 'LOGGED_IN_SALT',   'V+ V?S^q; z)yNseMp@BI[9Nn[)v_x`5Qj5i8ZS?21xT;sR%7O[wr_(m]8%dj.&.' );
define( 'NONCE_SALT',       '=I{ffR+OcCr/!VwhKicOxQ>;3tIC%M^ZT(Wp^{<Jdh/Ge?.nF+t?sf>gCDZ.!M)1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mis_';

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
