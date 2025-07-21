<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_p1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'LU>8yI76p&(k^KQ!b2vlJZ0=y<MN=`;i[`n.AqxGm@kw:Tg$K-<R0?W`I*=7UU5]' );
define( 'SECURE_AUTH_KEY',  '=a)8kqUlh4cP8*>/?<qUO=4(i^=(T~3k;FCy)2uS#YK.8{dVWq%nQOal&hBpPBK_' );
define( 'LOGGED_IN_KEY',    '<~eM(x/-.2(lE1+s2@ge8 =DRzgKD^OTeuXSQC!`%46+yopI4d}QtqV4%VreAiS8' );
define( 'NONCE_KEY',        '}Lzd^^/cG-5Q(AWZ]IAR`_?|Z_I$,hS?2b-8i(26[Mpno[v$C3m~j)xPs!?MRr9q' );
define( 'AUTH_SALT',        'F c9gIu)A_nd<EBcuTf!xiU.Lr%o)FMREm!vK:J)7]<.9pJ$sK4!`N4ljL2~M&J_' );
define( 'SECURE_AUTH_SALT', 'aBK[|a+-.?L.{^C7lDZ|:PLesp,I1(89nxBL>`bd1T]ycz}oK;K/P9CJXgrW$sM:' );
define( 'LOGGED_IN_SALT',   '#0A9A#ehAB(:(!9V,_3wQ ~dp:>zeQMj^iZ#z3_? SG#.fMqW!Z~)>4Z|}PK>! f' );
define( 'NONCE_SALT',       'S<JroQnG0P{Vj[sfeIcBs}&78#hV0pY?YxM,t?(QBJ8+6fq[-AX>2]>57^~3I1(l' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
