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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'F7_77tVg*%=>EEB~WxxjNU`W_%v#*//3Na%u+e#Eo@uW~|yT-Xu4DL-[R1vj>(1U');
define('SECURE_AUTH_KEY',  'HJv*SZ+E2hRfss>V)s{yb!6vp7sTdzNR6XmJBH&-E5m4Wdeq@-SpW%W*j-%bfP<o');
define('LOGGED_IN_KEY',    '/6MB(}eZ;t3a<S}});yJN16q[3Wk&C80ZVbIOv4;4%wXjOKi ^8sN`;Q7t-H#t^A');
define('NONCE_KEY',        'PIwL!|Fp;X{ajOrQ[&3,:KS%iUr(mqu?nS2aNj7TvhhhvGQ@d}B9hVXVp8eI{Jm&');
define('AUTH_SALT',        'FC_<xCiJUGF`aLjd?,)X1|#}T_>*=sGBI7j%} 5*356[Q2(R0xAXeTi6$?nW~]x5');
define('SECURE_AUTH_SALT', '&{8)_tu3`pNus0e[NlRt@F1^2,B.qs04=ZwEpuaa+?oj(iihc{jT{INv%Y{Ar#:n');
define('LOGGED_IN_SALT',   'u@,D(1[Fs#ZkXy;f`VT_(/$u[^C:y4@a+1UfWi;PA!nH<hm9cS!>8*W}Ar-6B7At');
define('NONCE_SALT',       ')!2krR%%8[u{e+BTh)8*sjR(,{<UU-}Ih[,*OC-(Ry$]f0b2iJNL1u86TVS,nDB-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wordpress';

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
