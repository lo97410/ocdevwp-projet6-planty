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
define( 'DB_NAME', 'plantydb' );

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
define( 'AUTH_KEY',         '>4@W:JG#YQ6{7h`wyBb)D4n?.#t0#,q-~^@morqO_!Skel,LGUq~ZadwL0`a=snE' );
define( 'SECURE_AUTH_KEY',  'mdHZOU`#ulz9vkK+wu90!H.Sa63bZ>4$ZMM^wB2f~2M+:fpY!sf:CaxXu ,V9yBa' );
define( 'LOGGED_IN_KEY',    'Tr_b3}EfpYil2|:Nj:W])b4{)U{eZ=yn(&p_|8]M^MKAn30cn^QeRXIi<X*$)v*4' );
define( 'NONCE_KEY',        '46!/ &*s=1pW(mE(JRw%8W,%n=$< 9}iSb0+<8,xE~ppQ~iZ3e6PLL~v>q~r$<w#' );
define( 'AUTH_SALT',        'ZE%Q3?;&)}E_b2cUY4_,Wm<IyPm&)/SJF=LwQul%rv}w6.uE)I:-KgwhjeeOSL9U' );
define( 'SECURE_AUTH_SALT', '=I|,/@^yZ?gDA(*+Wnde1@Y)ql>Fqs!i.<(b~]TJnDr*Y>@~Cb|Pm8yhy1oK!LF;' );
define( 'LOGGED_IN_SALT',   'E[Z]!s(s1%4xQ$ cpxtk+Y|>_#r2B]i+^rm#fFq1]Z3+&qbm|tIsv~k#Af:eLC;b' );
define( 'NONCE_SALT',       '#-p5r]hp{[U$q_}tWsSk}5Wg*k(x]lgCbp$ hXWoG{+[u,Q_3Pm^8*8|A$--<MZh' );

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
