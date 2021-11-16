<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u32396850' );

/** MySQL database username */
define( 'DB_USER', 'u32396850' );

/** MySQL database password */
define( 'DB_PASSWORD', '2PlfCMs' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '>Beh,_lX$J`>*c602]q5c|[;ILe&d~+)0QT-!}{Kuwl*ogpgx?fH{ 4wJTqgY;F$' );
define( 'SECURE_AUTH_KEY',   'ysVV*SGF;ea(nn_`&e2E{j4!oJ34?$CK{UTYC-X![vJgJJf#`$X.C&!9X^)?v)(R' );
define( 'LOGGED_IN_KEY',     'J6n+K_Sh|{(+JFZ=[y5h.ncG/?Al(l)?@;*dRcV9n(1ht)Ddz*u;sY(A,A3y:]He' );
define( 'NONCE_KEY',         'PQjLh<Yn CmxnK1{HZ(S5gQ@BRCKla|LLC2mOSE))F(c$pDHxk3:(>MdNa#5%d05' );
define( 'AUTH_SALT',         'EZU7w04~bcWZu9%2,PXA|SVCXP|PO)?Zett:SVKSft-N!mP_T1r2`EZF?Er*=9-^' );
define( 'SECURE_AUTH_SALT',  'Lwmh&5|79fhkGlcUlP4ZOrUSs+!`!nB~a%Uyh2GtGh/<MO=S^4r;[SDF}cN5?Q7l' );
define( 'LOGGED_IN_SALT',    'mG?%d|[B{Ri=E6%iaes@xlqWR4?ID.r2e%`Xnr*9(S]A;XsjE/4)fR}H. s ZBlZ' );
define( 'NONCE_SALT',        'Ht@8TVqrdV[?x]J[{Q:JH,IMi-<gO&-E;qwlBt&]K^O&_LTpQFRf.1dK;ZOIRNBH' );
define( 'WP_CACHE_KEY_SALT', 'Q1!H=/Tf]~~Mxb[]%QM^v3]] C7^lbz17y5>++%+z;}/pd}5OK{lk$b($mK6[}>N' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
