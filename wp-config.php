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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zaround' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'u|w}?*Ub>1% /jR-Fu/=vlEC-76r4%m4vzA*tyxXth+ns4BI87j9 UqV88Nw1!V3' );
define( 'SECURE_AUTH_KEY',  '/!f#M=HW*}rIJ|-OzPz2jEy(3l1@.{Zur@-mbkN,/g:5q%@BZJ~Nyd#ruB4j.Y:^' );
define( 'LOGGED_IN_KEY',    'wAK`%_V:v@6.uaW*F%yrByP$^k2)fq%:FgqlF$<?~[Z:W5jt{/CA5dP?65`i(6@{' );
define( 'NONCE_KEY',        '.HO8ulTih<QM9io&v%zss[Db1V&hSwnOZ~b[En+awRbd#o?M<>%08^l-GTqu!!I_' );
define( 'AUTH_SALT',        'OZWpkBsI#GI$t >{hc0^RNyo^lQ>f<kukn0|6g5t0si_iH~}Ql[.X6a}7YhIn+Q2' );
define( 'SECURE_AUTH_SALT', '|BrzT3dwEL8RzN_fn$7z,fb#}jpUMaAUG:h[a4|/.k<:pe37&1<D8D&5|ivW!F 3' );
define( 'LOGGED_IN_SALT',   'B=FTgswq)wz4c@Y5,K;KOm%$9XVjpk.L]Q7b%9QXCC@&m&3HsT+SL1:b|2i*K!78' );
define( 'NONCE_SALT',       'x5mjm:PjM] Z^)a8)2.+Z}m&QRQnHZPI2)R{K;s^H9,qSpbrpTdUY3bgQFs/WAbu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
