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
define('DB_NAME', 'edwpthemes');

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
define('AUTH_KEY',         't!X27R#FuU3Y~Mfd7YT=W2r8A=_X}{&]eLs_=k`p6OyA,~0RU:lbTwDDfVGr4 ?c');
define('SECURE_AUTH_KEY',  'Nv`<mTAv2`xb7[KLJG6eePbSaNu.BE@8Qz9ff,%/|M#3@$hQAcp;*aRQqf|as>$i');
define('LOGGED_IN_KEY',    't?}!~v`~<5?.N(aN!?8V4sN~r(8Zxb1@b50+7`sR_6^T[9Ln1.nERrpzb;q8^<nq');
define('NONCE_KEY',        '>ephZ&FMi+;Gn[J0[*&eE=XcXa^&@(aDzl#zmW~%bv0_MT7nh521IL]^x2g{JW7m');
define('AUTH_SALT',        '?Sj%FhI&L52HBn^yA[Mch/UGdu3vP,BA?FvK9Z7BA3>K;?Nj()h$p5Z}?&kctH]q');
define('SECURE_AUTH_SALT', '*aOesmgt!ML/#N@(fx6]e*RKMYLZ[raB#}tCay%7M)4x0?hdqAB+.l1p(VP9n*0r');
define('LOGGED_IN_SALT',   'U-F%iU#Rwil]C5sr?T&=S0?[w9/9mk 4M7nn@J$R)s%t#%Z{=cKYEJ25x0~+!&(0');
define('NONCE_SALT',       's]{ aWjYHULZ|-Abe2$~?u?0q|y-,9SyGcnsHl*k,G>c`5Op3~C:,|[.y/QY+peP');

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
