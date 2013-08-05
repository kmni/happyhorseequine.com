<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '3lancers_hhequine');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'V,}GIL|P[Gq=oF)<}Q:f9_UplNW}d6^67g|cR0_Q+h2k`ZA_B9-^-<w+v0M1LMVb');
define('SECURE_AUTH_KEY',  'nmt]^_v#8|ae$-b-FTccZ>~L6RxHqRPE.f/+|7y>qF<<+!(Yo+<+)wrIi>!9Zj[m');
define('LOGGED_IN_KEY',    'Fl4oFjmfNlM{Ye6s-u-F2kARZo/rX-{`@fgI/j,vz|8-P;V*@OC|Xsd9D2PYWb|=');
define('NONCE_KEY',        'T[0pw#ullhz_e1y(uXRpI/8SB!_?9r=#+rat)3``<r DVQ46JyIUs](zM5H%H_dK');
define('AUTH_SALT',        ';%G`e4F{t*ov0E)y1jyL~FT4&q~dU6?# j4VvI+LfKCoJwQ#i.aW,^Gcag]=Tt,D');
define('SECURE_AUTH_SALT', '7>?x.H[OinXM+g@mE|-TDJ&Bw}k+v$!IQvnok-*Vsjm3+O*z.IYN(:(U4<kaKg4R');
define('LOGGED_IN_SALT',   'T@?8K[+-Coa}W5Ke/G6lOxD8X-*:(#q=<ip>C M(PawIRk61%iCE`2>aLWQIhd5+');
define('NONCE_SALT',       'b$3NdPaEYBbnI~Ddox+:7gLKs@1Nv*G/Q=t9Z#?#T_m5-+K2Gs< Ie$D7_/fbf*6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
