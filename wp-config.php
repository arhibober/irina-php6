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
define( 'DB_NAME', 'irina-php6' );

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
define( 'AUTH_KEY',         '*]6q1M2< $Iunyr$Oci`9CTZeMI>E]JjL|Tcup.POlU_l:9Oae{A*_NvrG(-|yk2' );
define( 'SECURE_AUTH_KEY',  'I1o`_>bvMhHb:SuC P|Y;jq%K?W+sHhqZ3d|*DuIKES?hPmJfMu>m01?d=e*@n;+' );
define( 'LOGGED_IN_KEY',    '8]_wHp`!9#V,}huYDURWiN.U>M^N<`eoiTZL>sH)h?B<4S?; >]~90m!9Yn,>y0M' );
define( 'NONCE_KEY',        'P`%nxru,Xxtu.M$&InY`M|N!Z#;&PDZ%s.AJ0G ~1^c#0hF6&{l}5a&:7I]*si] ' );
define( 'AUTH_SALT',        '_lj;>kP#Koy6)fUpF~+qRb&)~r?GRhTo5I!t[uy;-2s#9zD$w& -/t1:_`KHMANV' );
define( 'SECURE_AUTH_SALT', 'KU~i2`~g<9#1OU$jg8#I_eeo|@gPA3Q{L=eNx.`,=JGM6TL9l-2nA92i5knMp=hx' );
define( 'LOGGED_IN_SALT',   ';b#kF@1YC.kiXb)0vt3y=.;gGgZGD)nu421,J<o~rQ=[7*S0F*|~ak SB/]5Dyr5' );
define( 'NONCE_SALT',       ']oy<3agE|?8yY/^,zMGGz<B}1Od^[rF0rA$}}5?O7UCys+HeV|zD@=b|l_tnpXaS' );

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
