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
define( 'DB_NAME', 'rtc-tech' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_Md6z{bJNzu:2}[xRZbViTz?6LcHC F*KNF~3lPmk Cjs1?J9]D#Kv89&;!yCd.&' );
define( 'SECURE_AUTH_KEY',  'C[N*ly:[slXvBM;!96M*ES)q}M8u74nq =R8QV,((5bQ0`[z%Y(cmB&lc48TVqE)' );
define( 'LOGGED_IN_KEY',    '%>:z!kw6X.mw<&4ynSLrI/Bi1ZTzndzj1,p<rXU|temMj~C9+on7~<eA$CMy z2D' );
define( 'NONCE_KEY',        'lr,zO]-ys3)h!d9ikh!qh.W2e8|EIh6|PcTABaD9a1sawRkKX^oq< 4lbZ+7)H:{' );
define( 'AUTH_SALT',        'z#eZBf_d[dLX11)26Y4&~+,YXxjJl-I|7k.*S CO1L$^lup69!98ANS0_aY$d>f_' );
define( 'SECURE_AUTH_SALT', '|(3~oyCqBxZ$F2R:!G:!$2H-AQhTp*t&9#H=PY ++$[<%k+NzNt.XsUSQB{7`]:2' );
define( 'LOGGED_IN_SALT',   'r&-,4;/Y|&@ZC0;S0xg&7<+Xdo>zU<HX|`Qg&g7$X@~l3:26|;8h4lLaZM+@}KtD' );
define( 'NONCE_SALT',       'Ac,C?9!j5J3Z!U)+Zz4eaNOce;1-1bM0^Olr#FA!K2wF_cTq}*KB2zn[*:{+PDsO' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
