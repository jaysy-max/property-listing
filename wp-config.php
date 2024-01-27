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
define( 'DB_NAME', 'property_listing' );

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
define( 'AUTH_KEY',         '{3ulg5imcNJISN&PC?jFfBNOoC%h@Gp_&$2=N!1u)/w)F}<qn4ct7p,1Z_3/3BKL' );
define( 'SECURE_AUTH_KEY',  'wf{U7A`y;=N- l_v:VRjIYes%$)GvM&*$h6@$ou6j9P{?qf2#5#^D}Dx3gDN]jdp' );
define( 'LOGGED_IN_KEY',    '|S$Th8oLG0?zr9Kn0nyR9Gsh!/=RLlCL$y]7qr7Mb>f*,]PC;/(B`rv[# *g+OSJ' );
define( 'NONCE_KEY',        'ES8H$1*$S_.F|E[^WnkYk<VPIKKCe!xuaZ}PZh#C0KsyYASx[@zl!*&kUUkq< Lp' );
define( 'AUTH_SALT',        ':nRu2-6W2-urXn3,-|mW+zZ+?}%u9ch}r;0{2M`ykxB}$P?fX0r}FJosO].4B^Z`' );
define( 'SECURE_AUTH_SALT', 'kTc0s4-L2F.ULfn./Rd+[9%;1pvM_t%8fNrHwX%`iqfOiZ3)d >m)+KSk9rQz5c,' );
define( 'LOGGED_IN_SALT',   'xY,`u9[ba{W_>3=66,9%(|*3O6lnXmip+r]eM%{a|GqmE7}i58k0` y40dBkY!mJ' );
define( 'NONCE_SALT',       'lVVE?_p+NSs[2+|#Nh>BM4I;$OG0j}z$fo$w&W?^@V-SRP|$`sLI6KbsnT kt)<Y' );

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
