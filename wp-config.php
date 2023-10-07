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
define( 'DB_NAME', 'Felipe' );

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
define( 'AUTH_KEY',         't5XKl2u3j88&VrthD;h%D8sm5d-1U,o^,TdNqM>agO04~R)4L?s2b&G12r~s?w~N' );
define( 'SECURE_AUTH_KEY',  '&=F!.^+8Qj[96Pf~.6k%chAzPbIzN1B]td!])hv&O2^Dqg.~r~L7aSjY&#=f|sj{' );
define( 'LOGGED_IN_KEY',    'vXuZ$oL!G*C*Ymle#N.h+JQoqXL@V)afJ[vyx{+VGH~O.L1;Ay~1orBLA{C_d@],' );
define( 'NONCE_KEY',        '*%kGaA>bA&dGTv^bQZ1(7mC!}bK|r+A0xyJvQw&3NcWfxsm}gOl-=}^_~)B,jidQ' );
define( 'AUTH_SALT',        'aAYyDbV^>hj9|uT&$Ri}Lm*iK,/,bgdq9Uq*=y grv4B45qb#i9}#lU[h<Cd. 2d' );
define( 'SECURE_AUTH_SALT', 'G]BH_4+XBy4#-&DRV?O|-P0/fa#-Tl|.Ytzk~?sxfTKL:r>ftU0yPR[0IIHWJKe ' );
define( 'LOGGED_IN_SALT',   'Y?gU7`cQj8-o~pDE6]XYJ, !Acxp$49{dJvdF]enx8hwO$_;uZhcPg* B To!w6L' );
define( 'NONCE_SALT',       'xHf,ZVxF}@CFII(~Ah@jbAP%NcEzy05Hh}!yNCAu9Jf-G:pxCXy4XdA+ELK/1p#!' );

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
