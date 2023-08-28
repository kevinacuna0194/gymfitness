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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gymfitness' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '}R=l#JgK_v:D9`I:GWxIC,8l{Qt>E3H20$[a``AJ(`Fi`[Qdk%E8C]txJL,xshvV' );
define( 'SECURE_AUTH_KEY',  ':V>&vuJG9Wzx }{:-tY}$9nr_Qt)o1Z~!{wg.J2ZBqf5m,+Pm$ F_ qM|4H `Qmv' );
define( 'LOGGED_IN_KEY',    '1$1uooejg}i(c`UeT%k A`;hw$} DAs8EO?i#}6avk=bgVNSl7Vrni)-r.-mHZ:|' );
define( 'NONCE_KEY',        '5&[9LVs-~m:=nnEA#0z@U(;]5=,pKtwim3y3<l>I/}5Lt1Glua){%;v~ST78x,++' );
define( 'AUTH_SALT',        'zMR}I3TE&CTi-i}t5T9}P|)^>>3j%bRv44@Q8QWDZdHKDAmzJ;6szsUZ~FO_IUPu' );
define( 'SECURE_AUTH_SALT', 'Yb$ jJ)kvC9~gn78!sw9vK!k5{SGH[7(F>]Lh.H=tA2as>o)2!.?!Gh;t]:)9-[q' );
define( 'LOGGED_IN_SALT',   '21kUyG@~>sc09q$`wB&r@q~iEkjFf&*o{=_Jq6yYu8&}1?^iFDXH<Gf<vBH//m}f' );
define( 'NONCE_SALT',       '(L>v@JFCQlSR|zCVsykdcassw6DJ hvU%=xT.j|PLgX!cWs{GXoCbx9@*<>;N;W^' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
