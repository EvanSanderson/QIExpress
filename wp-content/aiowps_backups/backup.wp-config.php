<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
 //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home3/oigetit/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
/** The name of the database for WordPress */
define('DB_NAME', 'oigetit_wrdp2');

/** MySQL database username */
define('DB_USER', 'oigetit_wrdp2');

/** MySQL database password */
define('DB_PASSWORD', '7GtvbGThMbRA2uts');

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
define('AUTH_KEY',         'Fg/:45a)X3ewF07E8(h1SXWnb0m<PE1-\`-u3PCuExplbQAKIt)))Y^/:VW6sXHT^IEm^8)^Z');
define('SECURE_AUTH_KEY',  'Dl>9PqW;V6DvflNk^cUjMF#dMaK142O_?9;ZRdRt#gQo3=b-Aar\`=(IjD|~$QxUCPFZZfI0T*');
define('LOGGED_IN_KEY',    '_W?G**i=wUyhG>iovJ2^YImPP!(J?QF8<st5*Et5BOeI=SW$e!3-OmP1Ht#Z7DEcxNAr');
define('NONCE_KEY',        'vB*e;u3rH:70G@\`$((Tbiu<EV68n~j=U#79mt4IUmlL673g1fTeYG<n|;f<c5kDhygW;qMi!$');
define('AUTH_SALT',        '!qx*9yCr;8GfIS<<C506:LD@ujG-Sj$iiZXm*sD|7/=sYqiSKbOj/1G2sS|L@o30?\`)*');
define('SECURE_AUTH_SALT', 'oc>7>(_H_KQ0k!rdwzN>\`o:?Ydqt=it9=3FaeFiUyToP9KpWiZt/uD2Uau:eU=BDD');
define('LOGGED_IN_SALT',   'sFWsE_srh?h@1=M2tr0fkVT2Wm*<y46qvesW:(k*PO:(1v^1Vf^7Rj!dd~Q2ryZ;KD#M)7');
define('NONCE_SALT',       '4W_A(x9-e#52Ry3(EleWc)<Rr|bg-12>6B)^C8#U)rgPo6Q8V|YXeWkY_hj');


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
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
