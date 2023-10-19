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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'lJrrdZH(GOt5x}!F^*PZFL B5@M7g!#hvJko<QDf[rM+GXchLs_K@b-foi,PJQP,' );
define( 'SECURE_AUTH_KEY',  'idA1nasAe#xX=Jm3/[lO.TV$ChA<**Y(<6qxCUeyn:qn*C`N@X;w[l/#MzD*Bl-#' );
define( 'LOGGED_IN_KEY',    'JoqJ+Psx[H3F$MTI0`VAd@wW6Uy}d3;9e:D5Yd!;Ud0#*QAM4Lh.w@R.Y*dX#7$q' );
define( 'NONCE_KEY',        'FE)Gu1P~8$M Lr%`J}iA}v_LFXlyJTLOK?]9/A0Cd~]2A8,urtfF*Nj9Ki^.Q!Fl' );
define( 'AUTH_SALT',        'VV]}tbW&_G<Fm0*RJ7%HFR7lrC5Iz$2KqvAdh,;c|j9oV*NdZx[$V?/`?Rs(]Qg0' );
define( 'SECURE_AUTH_SALT', 'w]a;O]?QwTs/-ToQc*H&sN|6- #DQ/bP8k8<D8P+;eMj@mOV?y<Q^x) 3]g,8rTI' );
define( 'LOGGED_IN_SALT',   'k36Oc0H1H:E,b4Xn:|q!ksnCyGS[1l:@}^aET$2hYDlq76&93@-3L}4iY*+}.nG%' );
define( 'NONCE_SALT',       'B0TWqCsUfZvRgFM?i-Hu%!_HM[nU*7qG)i`Cd8BjkW vKwk{,J3/)aALwR`ll[D4' );

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
