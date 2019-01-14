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
define('DB_NAME', 'db_art');

/** MySQL database username */
define('DB_USER', 'user_art');

/** MySQL database password */
define('DB_PASSWORD', '1Ugg#01e');

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
define('AUTH_KEY',         '+e@=AfeIm^sZVQyT{kQ6&,bTsx a:T[`XWr7nU^Df%T9htXfq]IZDIY|rVO&FJd;');
define('SECURE_AUTH_KEY',  ':@s%8z!DFV9>dsdI-7PQ=I0y5M;]C,<`L70*yQV=ejBO{$!>.5P|5SIevv7C6m_!');
define('LOGGED_IN_KEY',    '12%ss[S^C?KUOagELDVwu+26{.XL ,$u4^t:ePic0RiZtB:,rK?]w*xz8zvHk(u5');
define('NONCE_KEY',        '7g8oi1Xk[5VaY%g:9-jIL?q^zXi>8rEpK<AdR`!6q<9xk+j>F)*SqnW<]~dwE*<)');
define('AUTH_SALT',        '/%:g/fIf.Eq&}~p$j*6A`r3$ivw}4$LW81g?t|BM.Q/[0obDrDE-W0-u1<1Lp[}2');
define('SECURE_AUTH_SALT', 'L=4;/wc_M[A,Q>L?>`3|mczkOnT]/is(9wRWua`9#~U{)!7?X?)f*,[p:w0$Yw2p');
define('LOGGED_IN_SALT',   'i[_J@]L*$XtCHPd)Cq5&r$e}OVBnl,890vJd[o<@I@1/IbR)Av)LHOg2HdxsGn~]');
define('NONCE_SALT',       'q,tEguqHwX5u3EhyH#g-Kxc[v}&mF|E=?e5$AC-jQ@1TLm( !qDL>a$&Sz!5Bs{Q');

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
