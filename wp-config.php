<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'johannaklkr' );

/** MySQL database username */
define( 'DB_USER', 'johanna' );

/** MySQL database password */
define( 'DB_PASSWORD', '8e*Aa0805' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'KYWuu +=0>{Sw`*ck@DLsNGYFns0RmX4tw{VY:,Y?phYLvRPCWO(JG`z ?|fST3l' );
define( 'SECURE_AUTH_KEY',  ',7+37M^;whb*B&GZMNEC#>A)sb4??&QE@w@p-dd1 !CvM!-h5Wmy1%,YsneU=`64' );
define( 'LOGGED_IN_KEY',    '(u_m@U=hdv2`$uCHPdnsZ@4a_/Ka~%lt|&,;6hA;8qV)@=v5H,Hq-,wH.2Wh691z' );
define( 'NONCE_KEY',        '1-SVoGkyY$L{Z;u:QIUeQu]Ik;eXV)wRX(3CQ>[qm%u;qX(8KJZ0%t=Mk|)V@E;w' );
define( 'AUTH_SALT',        'T&{EP#63>&[c)0_ a@n)2k g4{VM@[Iy1`7MumN?e?Bu86Ml$sYK>:KJC&pp9^M!' );
define( 'SECURE_AUTH_SALT', 'jg{Okg60afTwZp0=bJu:VS#5no{y9l*fJ>W4/Aq)p2LPM7g#]RF>Q792VI>44-sd' );
define( 'LOGGED_IN_SALT',   'Oq/Z[[,W89{wx8id~qKZZBI% ~XeRGx#KxSYpb3[:G}hl@Kz+kiV1~z;S%<<5?B}' );
define( 'NONCE_SALT',       'JGMok5_kaV7Iu#qcr*jY=@{I?FM|m+_tI6^yIvCW &(2a.Wk@SAFrfefY!kc1Z#E' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
