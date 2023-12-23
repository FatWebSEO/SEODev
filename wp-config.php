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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '5O*#GB=cXvpSKrKs8rb3Gh])H.-,tiD&lNL0V,b6>X f><,U jpR@Usmx2VGkk;(' );
define( 'SECURE_AUTH_KEY',   'VkNcw%I<k(v2 H?.lWKy{txQhPhNS3Nj]xY4X]ZJ}7[pKxgS<Fkaeknn7`C?-nv_' );
define( 'LOGGED_IN_KEY',     'vVi[^C#PuV@:LZGUh5+a=@fdaz8Cm0E|cO12_T1MW4{(/ls8#!NnGh8C-Rm,/8&|' );
define( 'NONCE_KEY',         '`h!#/=mLIZF1) n_gC:dSd&E@j.{&-KmB#Nv^:6(7408 WY:2Vp1}tC~zd.o uF1' );
define( 'AUTH_SALT',         's^G!)^4xXXFx} 2aG6pAVi`P7;/)%5v@lVl7%_yG?oHG89o<Az0Ox|3kwR81+jh3' );
define( 'SECURE_AUTH_SALT',  ' 4IE][zqY|u`[n#!]/>aV%B%ghQW_)y#Ty&!5N*75I8&D j(HNP-<2]-K0C8t=r]' );
define( 'LOGGED_IN_SALT',    '~:A^uEE!.A_V| m/Gq2=s;{tKb(Nq+vvrq:M32Yi8:FE$nK_YcU[>G!P>jK2C=wm' );
define( 'NONCE_SALT',        'jR7w~vD~HmW/C%ItJ {M&)NK}ybZy6mxsVC<~Z%eV)[@-Vd|[3>RPHv*iNQ.pXc<' );
define( 'WP_CACHE_KEY_SALT', 'ODus^yO[c8eiwV|wYKQ-@xs?}DjRx.NR%k0@7;v5fDpJC]:N:dTn$2he6nUA>PRd' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
