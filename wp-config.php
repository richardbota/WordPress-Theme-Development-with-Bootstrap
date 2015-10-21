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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'rich');

/** MySQL database password */
define('DB_PASSWORD', 'xnNnWBu94ySqKGjn');

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
define('AUTH_KEY', 'EUEm;/9@ix/X~qy]S.qC!?Wu^|dq!<2Ap-9xuo DUS.esAf|0Z:b<zb4?M+3d@z7');
define('SECURE_AUTH_KEY', 'HRa`+%SF&_5-F|(MxNKZntB1G@!^RLgUn$t}$|4BpbwK+EC=y`H<( g=b$flT%.E');
define('LOGGED_IN_KEY', 'G`v=MS:O]Jl]^)Mszb[+m6a.Z[/B|Pe1pFNIU=rJVTvzvrE5]/R8Z{qb&4z]jbt]');
define('NONCE_KEY', '`Ss@bN9dS{cC_P2jKbYy8o_g<(7*:13SzHPaWI6GK[ie#`-ybUG&+!yZwj!.^SJb');
define('AUTH_SALT', 'JS]Tks79@<]yZ6C5Gu&wQ}s]-i><9l3@ 9DB%|s[X.&Nb*%f2|b$+n}QP)TV|7+U');
define('SECURE_AUTH_SALT', 'hO+W1>r4]42v,*p|+U*D}#CqbBF!gG7!,8[-n#6m6>YlOZ6*ljk=1O`m.0C#A_)C');
define('LOGGED_IN_SALT', 'H7CVQwnvK{<o;9P|NcKu|=@58qEz`0uZ2Mj:++3U3C;uF)-D^@uZKqzCOUr}]<3D');
define('NONCE_SALT', 'zwyzoMM|@[`jU|zX-e(nKW7d&3nX3?$ZNP68F*SVCNH<n6HNyky]kuY7D=PRPiW-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dbbs_';

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
