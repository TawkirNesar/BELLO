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
 
 define ('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tawkirnesar' );

/** MySQL database username */
define( 'DB_USER', 'tawkir' );

/** MySQL database password */
define( 'DB_PASSWORD', 's7qYYUnok))quPct' );

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
define( 'AUTH_KEY',         'O8m7XN1HNG0p<B`d7sDN6,U}J)8YXP$k1chDZ<HIz._aTHe;QlA{Pju<+KMd@d+8' );
define( 'SECURE_AUTH_KEY',  'Z(.P*stCw]m&I=Qxe4.#Ip;L/(G=1X=N?qlZBuDQ4Ni?OZ2=Cw@KE2:vLXl7:D8,' );
define( 'LOGGED_IN_KEY',    '!9V})%0-8`-sy2cOT9yZQ]8;3=d<~t*By5|Sk=Qv@y; ^,><Gdg3T3~=!s/c&U$]' );
define( 'NONCE_KEY',        '|60~aomIBCf$f?|}vPi}8kIrS_~]IJ#ztN*20DZbJlX.~|**W >Wy=qk0?{/:6.p' );
define( 'AUTH_SALT',        'tE-j/kDPz{gR{gMxZ|H@80kJkcFJ%mkJgz6lWm)KZ~]o>eb|[*)M}d22<}u8N@7-' );
define( 'SECURE_AUTH_SALT', 'XP!_>8ey3XxO`,rJ95<Q=@QnG=`h@:]tM.xp(^yg-,NUY~Ap&C]XV7EH;I@!4EcV' );
define( 'LOGGED_IN_SALT',   'CKl3333*E@O~zhc`DDC7n3Y-mwb*{%LwsaY)uAPNP:jB&2#KZjc]gH?CvS2D>XV)' );
define( 'NONCE_SALT',       'PoQu-ZrsWZ;t;#71XI|Lwt ~ups<w}q%;qK[)bQ9o}quX0is|T#6~yiGMHzKY:)}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tn_';

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
