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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root123' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'Ev34ZN ;-N/K%f*^+ `kcA<-YBu*zo)B?HpMGDAHAjavpG9M`ScPg27. 0 @[|KW' );
define( 'SECURE_AUTH_KEY',  'SE 1+lrX9GU7YLvHQ`a]hh20hpkI`b*x%WAzQb)J&HY|&`c#9Ptv]ykoITK+mMfI' );
define( 'LOGGED_IN_KEY',    '0BQ@NI>&jgGUBAdPcm1`v|FseiA_?vi72h[WPQ><a6c!SzHIZ?Z?0;v@3oTh&4#D' );
define( 'NONCE_KEY',        '6FazU`S8EPzwNwE VP>p&h3tkE^qCiC6L:UD(xiv~QMVyi_?4xOSBSHGqzOh%pe]' );
define( 'AUTH_SALT',        'pNK!EGTzx_0zAeMW^N;n;ti*(6wl&pPntIB+,C9A+@Gj4P<rOZhi~w)1+-I1!j@O' );
define( 'SECURE_AUTH_SALT', 'nDaa0m{q<A L:LEW0!N3jy5#%-u4POnuAenCwO&OmD9L4=:-gyGQJt%y6AEBX$YW' );
define( 'LOGGED_IN_SALT',   'VTHHTT!a-Pf g=?,at&h]h8YtkGoGE<vK]3jCfX9`,Tu-WX5r%,fTlUpdf>T:;)U' );
define( 'NONCE_SALT',       '!$Z-[?v  mxEu~<BOdrpK)tNF/_#0N>eR;0&BlL^.%y00%qvVqvQs9;,XfBtmBe+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
