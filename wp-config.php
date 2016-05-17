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
define('DB_NAME', 'nxt-cmt');

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
define('AUTH_KEY',         ']0CeSZ{T%]t-r9NB_|5`08UnM?:jK_:-1XL.!wDXHggca@}+DdD$ff47DHZlP|[w');
define('SECURE_AUTH_KEY',  '0.W!zga.$:-43imY)O:#,ClKSBpoQnN~_$>o]Q/D7nBE[!b$q{Uoq_$fM}mWu.t0');
define('LOGGED_IN_KEY',    '6o9K 5jnsua!HM~;yV!(<YAT1f=VIV(JX-oHY-m!t,G5A/KJ?Osh.A+qE5,Ldsv/');
define('NONCE_KEY',        'kl[g0nkU%hYJF=6G:SO$^s!fqBtQKn+?;ulX@Q`eMXds=A_Mt*S1tb5>r>3<iOS:');
define('AUTH_SALT',        'H$`wbe6nP(1&Uh/3}psMSH|LmejxkFG3IZ7i| ;6npr-|a8;-pm1tY Dr>DCIIkN');
define('SECURE_AUTH_SALT', 'Yvp@FheMd}9BJ]>P$&a>Nhxq No,@VOs,~MA:7UTW<AXa2-+[b^[@UsXBrs=4t>:');
define('LOGGED_IN_SALT',   ' OUi5OHN~/))E>tCAYfa>T+N{IhZ/.~6-x3Qh$rS*,GH~JO~khrDx#U5)}6-h{2E');
define('NONCE_SALT',       'qhTm=sfR,8rySh;?Pgr}yo:uYNFrJ9V{ov-/%hWr}` Faah5V=BxA@gD7)j,V0~h');

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
