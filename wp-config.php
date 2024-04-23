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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webbit' );

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
define( 'AUTH_KEY',         '8B,xprd(A# TvgwHu^ 3GkY6;SqD7SbP7Ld($O*&Co 2r#3$H#C|GIZ.0R}^@@Bd' );
define( 'SECURE_AUTH_KEY',  'fU@I}+E5uELfW%@?s?_:]v$88TSi2URE%Ys*rpniG&+gUr=S5DdFc^K_HfmH{}+$' );
define( 'LOGGED_IN_KEY',    'KEhs*4$?4Bh#VQWj`Y9N{ zUw9b{!_?_RlOc$ON~Qx}}s;QUA|5%}T&N;tkY;4Ue' );
define( 'NONCE_KEY',        'z$}R36Xo-;V96)Ce]v493Ln-3b**hV%GSp8<caYk27-d)p) g=$4RbK7a^(Qy~o0' );
define( 'AUTH_SALT',        'R@te_LF2mH0pJ=SrP2|YGIRc*7J;`}1[ATM:%e a-`$zr7=@<&3jo,r Y??+n#GF' );
define( 'SECURE_AUTH_SALT', 'pju~%,^$)8Q3Ft-77*.$]f)5,.;P(V^Vi+Gr~aHup~*nTb~=LftAy<&l+GYg}7+M' );
define( 'LOGGED_IN_SALT',   '^1Oxyt300rZW{xmUe?fUr Gw{TQ&78lh|^4@I@NQLtT.BATndA~W7DyO!&f{Y_mL' );
define( 'NONCE_SALT',       'Vh0Y2v8@<hmK%`n^LX54G>Al:eW|T^X;K7Cbtxp!S!~[FYq~1~C{6vb0@DXQ>M_b' );

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
