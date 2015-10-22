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
define('DB_NAME', 'wpdb');

/** MySQL database username */
define('DB_USER', 'dude1');

/** MySQL database password */
define('DB_PASSWORD', 'Fu4FEw7j2n2UwaV8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'dx^KzV_0kmcHjI~Wy%{zZT3I<_s.Q;|~T2+(%|nlrdkL |v&jrhfC!El(-R{hT@E');
define('SECURE_AUTH_KEY', 'gRq>/4C0M9;3L-$( -ZR-*S`5J*w23tLPSR:~TQy%VqlQE7e{<#f#`%BtWW97ly#');
define('LOGGED_IN_KEY', 'EuE(5:D! {z7zoJ/|buOBGcU)+/Y~fD6}fbN1bV-}H/@uo6p%(-.#|Wd;_-AU-zL');
define('NONCE_KEY', 'wz]L3ScJI5V*XJX6jeI]PC6n-*8!4{= vcDW^*==0#2d@K{-4puSO,Q+hjR<qJxn');
define('AUTH_SALT', ';W7?h+NDe}1;[_YD/(oi1BF@VG+uBv=KKFS{:}F/):|CeNdKffv1)0@hhr+?2lw|');
define('SECURE_AUTH_SALT', '|o>Ut3+ZwC/raV2vznl~`pz%;#z&BAE~Ti}Zt%|~@,r|9yh]B&|CdiyZO/{^u7#8');
define('LOGGED_IN_SALT', 'B#D2:,1H6L=B5MM@Ti#x|1YdKWqP?b+-}Q0FC.2>4)_2Bv?Dy{ZX:c01V#GN r-B');
define('NONCE_SALT', '|Bv F`3I9a.x$wC9rBx~,S 5~bws-{$~L.]t)B8g1YD|MvHy1JZqylEn$D|dhqNb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdbbs_';

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
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
