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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Dx~B[#<!tn$zT*_wq!!3XVPFmH;#Q(+4+b36>,NrvGj$={0hV&#!ArF:&RQFegW1' );
define( 'SECURE_AUTH_KEY',  'tQ(RC#UhcK/9# k- wQ2YC(`(U1ij3-Tu@jHifB-LGHM!{VJX(0z-/qd/oV4!d1e' );
define( 'LOGGED_IN_KEY',    'kZJVf,)G69w7<]mTeT/NyKx_l~9f1~q[nJ$D=)l/B4kuucUQ,34SGf7>rOTW>dM3' );
define( 'NONCE_KEY',        '?WLexG7n{K*g`~l=mL@-Ud^IuubO-{b56!C,*$S#{T5Rk]U-Vhziwj{!d=!P1/hJ' );
define( 'AUTH_SALT',        'If@[68v#Go)ZGVCwF:G0Rfji{NLXHbci9;<O/Q,g+R&O*U^UtT|ObZ1chX{7=2jJ' );
define( 'SECURE_AUTH_SALT', '[l2jQ@{?-mX0.sqss!%;!n%_`$=JL2sgKbk>r4@07&*i;iYdM#<t7^weNG$^;eEE' );
define( 'LOGGED_IN_SALT',   '{#c2+mb1rxUqOa)!@sh(@PgxWEsGI}G~kvP5CZV_-&<dn%jbrp9KA@b5(C02T6@r' );
define( 'NONCE_SALT',       'yvAoD!=xfeV?MDEFFF~y&XVuLH}ukf>X<<L~YPF$!`^f8/_1a|b,R{uvNk3>m?x/' );

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
