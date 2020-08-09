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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thelicham' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 /*
define( 'AUTH_KEY',         'LrJKZkBs6o2h3hoj6AWuaKgpdZDkmUq8LBv7mt8l7gFFkUtij4te0DgwxF7aa6Le' );
define( 'SECURE_AUTH_KEY',  'mfxspcDjVAFjd4ZsDJcpi5ZrOtDzabMjNle5dgSvepSj7yU2j2298fshEJbBmgro' );
define( 'LOGGED_IN_KEY',    'zxk5hBAUqU29vckalY86XWPO5Whl3xLBEJZkGJ9lgQ0OxxMt4C49YUmrYLZhlC8T' );
define( 'NONCE_KEY',        'ppW68WoIZlfScIkl5m89ziqiE0xHXW6oLOPV4YgAlpRJjPajxd4D5O3HcrdL5rwY' );
define( 'AUTH_SALT',        'K27ZzWIaHia6zKBxAefhPEB6zaiMD7Kzg9of7ciVngewpSxf2cGwzVGhudvANHKZ' );
define( 'SECURE_AUTH_SALT', 'lgYre7MhQuf47vKJHmOog2uJPijuWTJz6kBHkWScrYLSQ4V91ZuemWQHLqLK2K43' );
define( 'LOGGED_IN_SALT',   'NKqS3osit4kHcpqnrSRQNQRlKebqWmqRs9vCBYRSzGSdXDQnfzseG6i3TLm2t2cF' );
define( 'NONCE_SALT',       'V78wtyQZwp5NPUwbdUPeI4LxQFtZWAKbhAbQxFIdFthitO9ibNi1Ygatkk0Cmm5o' );
*/
define('AUTH_KEY',         'cG9fhY~1n5@^;S9A!/G>]8@H,*RC;bS`X 4$+R6::Znhibsc]O?t5mF.D&HS^re)');
define('SECURE_AUTH_KEY',  '}$#rF>!  H~XWnJ4nK;C@|+INh:/!-?5C~|D-htj!KY4RSCFXn)>}FdMl+[)*Qxo');
define('LOGGED_IN_KEY',    'bw$caa{ksW+ >OXXl1:Hz]x-2%v57kq],u|v- J&Dxq+-Ujm?wic~:Bnj+j|wa*Z');
define('NONCE_KEY',        'Ey:3`l?2ox9]6o*puYYsX*,l{m`Eo;b?<G3!]f]}qRuWy2)+q+O--{]R?c=.,DHP');
define('AUTH_SALT',        'f`I@9UX+k)LH|k-F|<Xc140jT}vH*XB*|cl9SQmQu;F5>b/abdk{o0]sv@1i|?m5');
define('SECURE_AUTH_SALT', '{f$lbpkajr3rV qy|`%!8%OsnLjx{jKs$g)}Wi9Q4]U2XQkslOPhIN4Zh /+0x6m');
define('LOGGED_IN_SALT',   '@YW?%%I`Hruuamr#~KjW.WR}uQeV?O:G]q3EhI~Ys^_m1&|Ta$.^g0bp[*fXP#L1');
define('NONCE_SALT',       'lDmasVR1?j%+7nv>jtIYv-s~blFV@F)i>X8^C[vwbuT2~|IF=oOgo<-Q1p*Sp)`o');
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
