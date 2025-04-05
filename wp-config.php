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
define( 'DB_NAME', 'resume_db' );

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
define( 'AUTH_KEY',         'Q6Y@Qra}0VK6=pkOB`5|v$d&dE~[Wh3j{:LJMSBlsGjSD8VCZP#y,*alg2F,#/|=' );
define( 'SECURE_AUTH_KEY',  'S6GKTxWE&|6#VUMp)i$7xhh<P~gHJ{>tr7hAw*acGP?q<yhIEBG4(KU8]Vn=/rZL' );
define( 'LOGGED_IN_KEY',    '|baTfn)[8C^r,W%]l]~)ZOT,Or84@RVO-R}[_?XS]=*N%fUW<,mKH}<!WVDfspBZ' );
define( 'NONCE_KEY',        '4p[0Hl}>.=~+8RM nWGQx[7a@myoe?Jr(aJe^:Y5j~jI8fI>_8&p[4xRyO1T0|dt' );
define( 'AUTH_SALT',        '1 i[@laBTMoBDo>zpPj{-M-Jd/6_coSfkb.G09i^*Xf$~HdF:TINl[lL!HXw=p[-' );
define( 'SECURE_AUTH_SALT', ',[#_WH0-oskD>6Fu0)kqNg3B~zbL[dI$f>vPr^Bx)88o<%1[0L4.F-M1Pzj=j_+O' );
define( 'LOGGED_IN_SALT',   '_hy8k6NtCBMh#Bt/?~ENH7Y4Bl:{kiBAj19vCtN>gMBw|p1$F_BNA0/B-$1-)mN1' );
define( 'NONCE_SALT',       '~|lOPjA>k$24vaA/LOr:B?yG!X3yqLMF^kw7U8]qbt7|_<bh&dJyexGPu6@KIy</' );

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
