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
define('DB_NAME', 'examensarbete');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5vr#h$:{oE:Y+b?fz>6mE{F?Zz!@/DW@;G!K~+:a>kp<RV;XCWGa?|>S%ok*hhQ3');
define('SECURE_AUTH_KEY',  'f(7wQ<7z%1C1?q6NfIMIqR4[|z26k>?LhEYtMu8z2x%uGu^qyqFTw}.rjJ^:DTZr');
define('LOGGED_IN_KEY',    'XwZ}5mpAI.hiZ~83IX!XvCA.*`^w[MJQGR2&W]TtW7.n{>^^oznKWQBO9)8Q!,rp');
define('NONCE_KEY',        'f1gkwt.f4xI.1rjd>%fRB#pBD!-B;,HnHZQbm?.C{Vd[vmA,-3n!Hf17<?BND|{2');
define('AUTH_SALT',        '(T!vq)5||<%#BU1S0CXMJr{MSnLicA<hObcm3.sNG~tz#3&=e;-#$O`3#5`|#V%{');
define('SECURE_AUTH_SALT', 'KChU5K>hRdstP-<+MG6:?il3QZ!O6|5%cguVQ^e3J[Vv+ewJ9Uu97 nYn90_E0/:');
define('LOGGED_IN_SALT',   'SY^F74*y;LT1Qwx|gJ~QSWBWo-e6Bo)0hF|Z#CRVcp${CZWT!zty/#whysBf JJ?');
define('NONCE_SALT',       '9oJ+0_U:Ccb/m<C({<:P0|8[9I8P!$nu%hS^Lc<!/|182iN(=*I;CH0dWLz_bQ>T');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
