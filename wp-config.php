<?php
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
/** The name of the database for WordPress */
define('DB_NAME', 'wpug');

/** MySQL database username */
define('DB_USER', 'dbadmin');

/** MySQL database password */
define('DB_PASSWORD', 'Bmar4mN$');

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
define('AUTH_KEY',         'R%-5J$vm)/+;6qG/s>7%4>:T?#%D/l*$<9XIjS9f3EWq%+fE?5wyguU72)!,5^}D');
define('SECURE_AUTH_KEY',  'HM-R~&ZkIe!U9Nn)h:41oE]TYAhddBN4_rj0V&(|T0x|$YP H|,RNo)<L,CQoGt%');
define('LOGGED_IN_KEY',    'gWU4&2g)b|_VE&u_&R~ZaP.|WH^n`H86Aj}ZeoD2++,n4<N:8T@!kM!#|K8D|E)(');
define('NONCE_KEY',        'ufFb86Yn$x>M-bOy*=ka~-[SBTa8Xv|~[e4nl;NMzazoN6!|5SD<W&9qF47~0n8w');
define('AUTH_SALT',        'I%yaA|3AI@3NeSy40c8[Uno?gKyD0Mi#Y8+a4{qt_w(nqV^~VQBu=~(i.6oZt52,');
define('SECURE_AUTH_SALT', 'Liob}.Aj1n6 ^Q[fZ+.r=OJ61LN mHO6t0%~0Age gSTrV+ OxPW}nC2f{*CSS<O');
define('LOGGED_IN_SALT',   'ZNJ: 4<-85V5_mEsP:1k8o*pZA6_G%1>w]CPRJE8}+7+jdsm`MH!pPg9mHkp?Gs}');
define('NONCE_SALT',       '*JU9GZ_jN pRStD&-{%A:{H,3yaUF!]n%@.+22lGp?~u%%vFU.U%1(r(:0MD2et|');

/**#@-*/

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
