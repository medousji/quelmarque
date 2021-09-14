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
define( 'DB_NAME', 'quelmarque' );

/** MySQL database username */
define( 'DB_USER', 'admin4' );

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
define( 'AUTH_KEY',         'NlGQ,q3[PW]331Bg?/Xo3Hhm5VR)QD],6VnRiqd($:kPq>`6`[*r%97|5sq^N@t|' );
define( 'SECURE_AUTH_KEY',  'T=*Vj,2!O/g7wa%U5ko.KqI%9<+o%8`RAcd4D8wMFo<at`o/sxGVS0_sN]gRv<hg' );
define( 'LOGGED_IN_KEY',    'n7b{+_g0hW!!2ZE{]_M$71&&8jyJGGRw{+fx5d.JQMJD)M~}7N&l%##2X 6jQoeo' );
define( 'NONCE_KEY',        'FU(Xpd5o71@-]9rRl:32>D/8GE)kbyl;oJiiU31cQp}Pb@Xi3cav=8eOMIN-phw9' );
define( 'AUTH_SALT',        'O7<^LGGM4KoQ;l?nudg$Z#Yg_3V7qIw_AGy)/vO4#EvS5j-og4p|(Mn/lle09CBd' );
define( 'SECURE_AUTH_SALT', 'Ri*P1=`?&x3ciXA 8TZ6<RK=RPm|R,5V]`e7Po0v[su*p8O*Xe,t4DjVmH;d5xZn' );
define( 'LOGGED_IN_SALT',   '+}Zct(S90{9vYI!r4v~r0$f|RQW[D1J#.0$DFtt9&2:cLk1@^c^V)sTN>o}+%j3j' );
define( 'NONCE_SALT',       'vWaQj{~_}AWYBJuA2m4M1O LmQ)oW,WcXeh=Z8/%n2!BzYL7OX<}D:]bb3:7P*.W' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
