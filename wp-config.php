<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

/** MySQL hostname */
define( 'DB_HOST', 'my-rds.cuukns2r5af1.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '8[:+`zzI$~RlLMHRm`;d1)f?VKG0i&bdY&z-l[Ksfm$nZ| _drMgn{QtjMi^^k!o' );
define( 'SECURE_AUTH_KEY',  'DsfiuE[-OxDqo8bCyJ->uC}g7&-7vwHq#dJa9?F,*N)1X$GshG=oyac;g>0I/:w-' );
define( 'LOGGED_IN_KEY',    ';?qU~!-$fP[h6kdn?cnc%` U-M>_EwxNqz0Us=?K,PD]^j,`=Xsf+$ziJ`wx21o&' );
define( 'NONCE_KEY',        'q4afHcytWe:`Wz^%Bx)]@33IJtW8i]#4i_>CO5i3yS5?cU*kxdgXmBrCtY+(_JxJ' );
define( 'AUTH_SALT',        'dsr!50O&}Ul%e~,pS1MC-Y8g>=g}HIY01%?d`BkXdN~/GC+cx/C>8|7I6E*Ij2w{' );
define( 'SECURE_AUTH_SALT', '/TRCeG0hLs~622kY2/,NJ=p&PyX:{waMG+o|)u%3dhg3<tBHY}-qMe-c ]xnUA9D' );
define( 'LOGGED_IN_SALT',   'xV([r_D]!t],:wsxL:H5kk7~EeC3gN#7PVw?p9cyP056h<<WA,j9=`g]#~TEc+%S' );
define( 'NONCE_SALT',       'ed]y1;1va;8^g(MJ}F5}OF/Sx*+dxO+W/=*1FCYSoWwOGj}urI`+5,=ig98[*G}%' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
