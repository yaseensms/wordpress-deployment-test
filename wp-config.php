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
define( 'DB_NAME', 'wordpress-db-instance' );

/** Database username */
define( 'DB_USER', 'wp_admin' );

/** Database password */
define( 'DB_PASSWORD', 'Wp3#Secure$Pass123' );

/** Database hostname */
define( 'DB_HOST', 'wordpress-db-instance.cfshqvbbbgj3.eu-central-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Authentication unique keys and salts. */
define('AUTH_KEY',         'v5q:~DlE@zuc*|}@2UrfAh5[zt{v)#<)Vg!c_+:{^gF5ZFXXRF{!}LXhh?p#=g1b');
define('SECURE_AUTH_KEY',  'h)woQo-OfbW,Ag($CiRvQTI<I3u;I[6]ZU:_qlW`ME^9iSR%3 qY|/>Osa0tPSoA');
define('LOGGED_IN_KEY',    '-jP}z*&70&)}J0nntv4@$9 Jj(uWc4nA@EYX3dyvV!_{Z1|cu7>$@<%N?o?=G-cR');
define('NONCE_KEY',        'Z50?k0z<|dC-j+:fZ=ii^(ns3@ftWU?cK3yJ `aaW-@[fpQf7tiB}S4BHol:ve>R');
define('AUTH_SALT',        'b-qj.}E/!oE@!60j%{5sfD-kRt01?w}gV*phRM1^/sbWV)ePzmLQ3.i`Kgg[R@9}');
define('SECURE_AUTH_SALT', '[qoV=7Dk1(X+wZ*O-a~SAP0}LKJr~}HSfRa3lp08&uK`c!ElE{BU>M7kYIi,L+So');
define('LOGGED_IN_SALT',   'QiY!Cuzy^]/aFd%$gvlm-Iao?p>xN&8>8{,9xti~EX0{^p@y5XE~,~Npfe#kHNC9');
define('NONCE_SALT',       'KJNJZ{L0Jd/9!@S[=:Tfs}|=ex9P}2thckKY[uP72PAYut(crg7o2;D?-R>BZ{1a');

/** WordPress database table prefix. */
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

