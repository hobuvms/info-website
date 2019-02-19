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
define('DB_NAME', 'hobu-vms-info');

/** MySQL database username */
define('DB_USER', 'hobuvms');

/** MySQL database password */
define('DB_PASSWORD', 'Y$WN%$aj^yjb');

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
define('AUTH_KEY',         '#PxQ9uRP6J 1<ONnF1Fl3s{BFpRMa-(mUfvrjS82F#N`n;y9T5iw>kx1DljqFoB6');
define('SECURE_AUTH_KEY',  '<~,(23%Q!Vk$#:Q5P?{j >KrP^i1Fd]*4=Ehtue}S}oL_tiz,~F@b9)!gfW*_>~>');
define('LOGGED_IN_KEY',    '?Oz>6f,Zb3aZy`)PT!-0xY;W$hGe2sI[5${^gd!^|I3cDg^fp(I_1X8UR3;sW)Q:');
define('NONCE_KEY',        '9m)Vn$rmG7+wb-6> }}W87c-pyJOhYy2N,IA}%t[B@@t[Pe@mGYiCU7D$o})83tC');
define('AUTH_SALT',        ';[hHA{<[w_f(%>*u$Q0K+T8FhNd[u(lxDxst{u8,a?l`E~/>nV~2^%HmExqmx^jT');
define('SECURE_AUTH_SALT', '8Gv5=qS$9x*+0$!@&Cvqf2i;Jra)}I]/>X-;#]3n2~E*rj{}}H@!eq*QvD=)XKOp');
define('LOGGED_IN_SALT',   '`eV$Phj2ct(wd@(D>+<p_!Sm(d]GcHd8MOi6@myumP7sLMr40&HE/99`I<~s,N4c');
define('NONCE_SALT',       'MwlV:~x<R{1D)T52X<P#uDv+$eda{sW995+{16vGDsEx9(W:ZF5KB/aod&jb:|c~');

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
