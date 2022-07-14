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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         '`TKel`l/d=yKDaMhi`: @#/109(;xWJK9~K5{V6|D?zHFZ+sr<3!AnLWir8rZy+;' );
define( 'SECURE_AUTH_KEY',  'bNdu]$yl<.jGi2jc/+_j$.)~OisDX[jehN9II^l0$::cAu*owpx>}v?.UCY>Eq%H' );
define( 'LOGGED_IN_KEY',    '*5d{.W,C_)yd&]9D$yG=prmwFXQE<bW]K36%/:_at1(Q%?zkpRcW-}cx<}0M1weP' );
define( 'NONCE_KEY',        'L[DkF~uXMF4@#!rVtj)Os{sA7sFW{@=-`8}{kf=8:8S#:h!5BSO|(SS{^+ A_$Q|' );
define( 'AUTH_SALT',        ';3b4_QQlGEQi[bj#~>q)r1Ed$)`xNleivM&f9M?S<F%19<8T6yjh?nwd-6){R:Ex' );
define( 'SECURE_AUTH_SALT', '1.3&4,L_qVnG[XSXr0R_SSllNUh(.iZFD~6e?{HxuN/luj$:+G_U6UVj8#gO4y%w' );
define( 'LOGGED_IN_SALT',   '@!jPH=;8BXrzce:Hfh>3:0m-yJ3suYUzK75F`gXOYcZ3+HMzU,cORzHRmD}CMZ/`' );
define( 'NONCE_SALT',       'u@Bw:,!HrPv>tj*R{S_3+R1cXiw9&1/:m&4_M%$OJJq_|JYa)uSULE@)_:l@jL3!' );

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
