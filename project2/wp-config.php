<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'wordpress.com' );

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
define( 'AUTH_KEY',         'n$Z7w~i0SQ*(i{YkhzSUCE{E(A4;|,a,6S+}P!0tc^v3!7T[--MRre%?.91v+Qp;' );
define( 'SECURE_AUTH_KEY',  'YZzL9V^UW/_FLE>4?ck&:%e{B&dcZRQ!pOB:zzh^|N]JRNLeM^XwK4|rCnWdx_F=' );
define( 'LOGGED_IN_KEY',    'ztw.5ACESr1&4HP14[m<s76*r*4$.FJ+|.oOQ,:;HtvX7G]7`Xw$upGoZ:.XTx#*' );
define( 'NONCE_KEY',        'xq]iIBH,%L;QQQRL>F`a@}TbZdM+%<@WbP+,7Fz ( (>se|Z}=F2T|,?qu=I+ysf' );
define( 'AUTH_SALT',        '-F-|ifOHT3aif,|89D37(N?Fik S[`jlU=D/i1Dm?T~+XAINq5xB1_;OFGJKmJPO' );
define( 'SECURE_AUTH_SALT', 'Towp%y,^$UExh+p4,5Y|NZ3MgT)q?CgpI0,Opy]]/r1+6RVt{-<5</9*v]<=`2jU' );
define( 'LOGGED_IN_SALT',   '[{Is19PP):;6`3?}obw(ywR#lAi;lKf|<],l^:&23hUL`U8CZRi{S[H`-;91zmyK' );
define( 'NONCE_SALT',       '#00d|2f)u_S|XFhI)&#hJF<nulDM^`)*Ah+q+0^>ZA5=(D=}EhYNq`g/Byz1a%aW' );

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
