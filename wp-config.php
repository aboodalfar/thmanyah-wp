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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thmanyah' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123123' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'P7T=wg^qNEVHZiH<}@}#YyZmv<GmC=8;KaTj)(E#md-+myUovZghL_LBuD81 (I%' );
define( 'SECURE_AUTH_KEY',  'e~@/JR}Wd6GWyX2*tYL^[qgG+a%^%%JE{q-zu^`Cl3C7[(s;w,0b:`;J50:N<]8/' );
define( 'LOGGED_IN_KEY',    '%!vsHu794D.ZaPOk5[Jd5PL.h*.+d7iqa}Nt-kV-,..]3K6#V<)gDb<)i</V_)DX' );
define( 'NONCE_KEY',        'W`OT$BNXL],v1#]={7wm;*]hIhvHmVvm}m*_xVC]mu?hYZ(pyXV<z<yJOeU=M31)' );
define( 'AUTH_SALT',        'sil6oDO7|S+-oSwLA0aiih2gp@Cc;NYf#VI5IwJO)xWx%@3/P*KBvT^QHQ`S1{<$' );
define( 'SECURE_AUTH_SALT', ':6I i78l90*zMfWC1<0r:qH[YVJh0}Bb*$w^IQ9c_eWpK}@I.%;>jbfuX_GtHqDF' );
define( 'LOGGED_IN_SALT',   ':Si7RzI]m(gvA$lnE?O7S0-7uv=CgPvRk&p53c`Fo>;>FsyqFyG.kz}cscUjOg+m' );
define( 'NONCE_SALT',       'KU[^:G]~+2I_w!sQEz5@Z}ufXIv0nRRl2Df`l>y=2fxe_> t5H|_sK,<)b9V0/q#' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
