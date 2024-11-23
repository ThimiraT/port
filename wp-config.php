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
define( 'DB_NAME', 'portfoliowp' );

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
define( 'AUTH_KEY',         'v7K)jhJmxM$@qkM7z,,0Uf}iu9@WL@pM!it|aHa:.iHJEIe|G{M;zpis a_9~0%}' );
define( 'SECURE_AUTH_KEY',  'fS$|[%TaQW?9hjW.v*brM$S^O FyfnYVbF4Q>Z}KQIq2qxf:XRIM,S5mw-+Y)G/a' );
define( 'LOGGED_IN_KEY',    'I1r*=t`1Ge&1_4 KxEqw&UL[)cyszt;oZfSuqUS<00{j6FAugoP;dYt3Fn|t&vzf' );
define( 'NONCE_KEY',        'odnY 6U(L!hB16h:>wXo;toijH1M[G1x5FMy!WzAfQfEYt^I{&fP)>n2[?a&4z:8' );
define( 'AUTH_SALT',        'o0X)kUQWU],2,j1]`9|:eGqp;[?}ny<Zcm(-gav-P;:T|#JUrMY5eAMOq^1Hkc(n' );
define( 'SECURE_AUTH_SALT', 'YUG^z8hXqXqS2j$stHbR(Bvs~Q^U,;hnL&wP:~!,JW<1#J?sdyCdaED*0^<DSuZ4' );
define( 'LOGGED_IN_SALT',   '@fdG#+GiOWXkxVJxX0WK7@1c2We}Ug$vn%>n`^ ^,c9$&)V}o!0)xi_(R@r^46u(' );
define( 'NONCE_SALT',       '}!E9_IdsLV?$>Z~_Bn?9nyH8#O2cdAF*}}@@rQX`*k{V0yQ!ZTebwbKk7K]W?Vg^' );

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
