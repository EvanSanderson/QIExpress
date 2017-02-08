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
define( 'WPCACHEHOME', '/home3/oigetit/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'oigetit_wrdp1');

/** MySQL database username */
define('DB_USER', 'oigetit_wrdp1');

/** MySQL database password */
define('DB_PASSWORD', 'FUAX7wKzIFZj1hpT');

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
define('AUTH_KEY',         '<sPz_Mg(YFA274UZ9=8bJC=mq8Wl-~lww?X(7b)^!CN6hni/g1^l51CNkH:)Ew:1XDG6');
define('SECURE_AUTH_KEY',  '=LiseN42tKM2f?#|N:h^C0Kd/8F$PW1US-Y-l*<x(@0RPG2pCP\`\`9G8cBGs>@qKjqk|u4Vhax-V!(<elESg');
define('LOGGED_IN_KEY',    'lt6<ixVqw;?\`p>bfhvb$Zp^3q017z2T-P0Vo33:n4S3O(gM1wznFO4F7e:E1=bS?8@^EH:@-\`');
define('NONCE_KEY',        'KuIF$W@>bRok:O5#AzvhwPH!K@fwtE4k-2b0\`ktfnt$BjnNy;wDtCnCVGw');
define('AUTH_SALT',        '$H2gukYe>v_mT_lOm:PUqiOqkDu2OOXj$7GkU^/6SHQMITn|yw-U/Dgm:~0C>1Vb98x:tb(?yDii)4Fn');
define('SECURE_AUTH_SALT', '9Acsj2_U|RrzPRbsq-l:AcVB3VVNs$OqnrD=xt\`2>E3>^EQgIu-*Z@kN(O|FeKd;QW6@gcT@Iw');
define('LOGGED_IN_SALT',   'z$lF(G:JJw:3X*#CUl0AL4_9od5Wnxa\`:7/?vz6V:H#7QD(Wc*P-4(#QXV=QJ|mtvMk#OQ*:P(T~?kycY<');
define('NONCE_SALT',       'ifI/<$);ffrb72D(pqj-IMs3#4;mTP!J\`BX^N?)ElZJMQ)f0BMbLWH?fMrAyU)AK5an8iDXp~C6wOvV7');

/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
//add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
