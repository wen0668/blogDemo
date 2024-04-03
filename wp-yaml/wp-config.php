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
define( 'DB_NAME', '{DB_NAME}' );

/** Database username */
define( 'DB_USER', '{DB_USER}' );

/** Database password */
define( 'DB_PASSWORD', '{DB_PASSWORD}' );

/** Database hostname */
define( 'DB_HOST', '{DB_HOST}' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '|xY0l2D7,xLCx-d^1U-yn`Kk|yKY2vS%P9jd;I??+=*/cL`Owl`2-RbM.K=K+JQ-');
define('SECURE_AUTH_KEY',  '8],uh|o1AX+|!hiUjf$ML[HnZ-r7brs1>?-s;vLJKfEali;AQ.?BwKClZGdhM%n8');
define('LOGGED_IN_KEY',    'Y|0:K`?t!D&2QD*-s6>)-rRouhebuiS*VUuPIjCF`3^pk:!+7BOcA4n@@?r8h!DM');
define('NONCE_KEY',        '.d^eWDZW 79_NsW@i<NU/x{~z|rwNqXS.!+<)GMf6#i+<qGNFJU[g5DiwU$Hevr0');
define('AUTH_SALT',        '|-~HM)]t;lk10)c|rycgmmq&|p65~AIvv/-:g+Gg~F<)X!]q*Y-1P)B(XH/g9O?5');
define('SECURE_AUTH_SALT', 'jG|U| -pNiTxHL!LY|5ijNPnp1E4<3#q.qQ!n6&|`L[Z%JB+|hhwHa+)EQK!%sQS');
define('LOGGED_IN_SALT',   ':cBeUGTX-8.EVc6.5SS`hNI}&5OP99t?m} %!(f%idu349+wC|].<|49E Ac2~I|');
define('NONCE_SALT',       'xy+v]s^B@ZIOm :H~brDZy%/24|{}vRw{]NGA*cH^m=C|:-zr0mT+2~fV1|5tn7_');

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