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
define( 'DB_NAME', 'swa-form' );

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
define( 'AUTH_KEY',         '4pL~|z.z(bA$M~[l<_g&wZ{6D7j0Zc4l_$_&:*B`.k|s|Qyw:Xm6d,yIDSzpfieq' );
define( 'SECURE_AUTH_KEY',  '0dxQfMuK3xa&trk-&~ t,-u*wgRt& {a.p+`K|rX,.b*{b`^&6BYaMy8Z!^gv`$r' );
define( 'LOGGED_IN_KEY',    'SW!o1`+e(6/.x|^|GeP3*r<7w+|]/`x wG!!.|,ifOIGZ]cuP}?[_w5h3C({`T78' );
define( 'NONCE_KEY',        'GB*JrJfdHjW<l^QNl]tmgOr[ToRU$B.Qly@gaw^_am+9[e=.<GBtsD8SPt)0%*~>' );
define( 'AUTH_SALT',        '9,R{m:m0Pa%Vs[Tr?ci(m|1Ag99.US7Vghzgi_LJm[@1JKp{31%MD2d*Zl}vt2?|' );
define( 'SECURE_AUTH_SALT', 'Y}(F[5:T~ed9.M}bt#0_`Tw3IwA|xsxe>u3MsV //!]&-x0sP/LSz#S3yBb&,UBp' );
define( 'LOGGED_IN_SALT',   '@ht+eh%>g]#@fhgu5U9??5S+^(dli=q@c3m4I]`},BKnmYE<m`W2Hf@*Zq9EGvLo' );
define( 'NONCE_SALT',       'Pf|>#fT=u`LYq_eX#Vf&iYs,CV<J?UuHn83umE(r7ewrxSDuT$=uI>1#B1$z!:O9' );

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
