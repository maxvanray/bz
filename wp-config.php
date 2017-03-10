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
define('DB_NAME', 'bzanelli');

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
define('AUTH_KEY',         's[oq~} PvB>ek=Vy)1! pPL AYcZd^sKvh];PbQvfM+UEtuAZ/}s5jP>SA&{RttM');
define('SECURE_AUTH_KEY',  'J9f29-GZ&Dt*2{d{<eNx8*4xG&D8BQm{[Op>3|~/A!Cgn]qclcb6QD^^&qXk7GGj');
define('LOGGED_IN_KEY',    '6a{&$WVE5  Mwu|S.Go/TBiW<TD=Q:NVu8DgpHZ3$@gC&#w27W!RrN{(Wy$|!z$g');
define('NONCE_KEY',        '*KZS~t yG&tLVa~K3Y5Y7YH<F*MAc?hg[{g!c.p::nwwxTf_v`Z [i~m^e[*.F1S');
define('AUTH_SALT',        '5)3#|1,>N)},ar65)E]t%m^<f1%~dz$7^bn7T+qt{DtH^Y}7N<B)&y>:r-q`1Jx,');
define('SECURE_AUTH_SALT', 'Q(>|2t}k`uOY(_A V^MX!_vAf!-6COOyqN-.F])SP*9.KWLA+!tzMd_-2e>Mn:Cp');
define('LOGGED_IN_SALT',   'L)L{wKc,([V9HXq8UL]G,s|1>;6L4GWRoF#y$ZaeW#Zte<48K=8(9y}!2ipV^ysI');
define('NONCE_SALT',       '3la0C|QMSBQ*)N:7%<nkY^Ud {d?lz3%krKme`qy-7YU>kiF&On%e?aLM$t/RMxv');

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
