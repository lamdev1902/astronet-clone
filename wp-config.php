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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'dLY1UL9R' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'MW-v[l|f0)i!v7*6d$ /<x^k=$hj`BK.oiY@rRA&:!u,FJbDIS%*J#f`o !VoR%N' );
define( 'SECURE_AUTH_KEY',   ']K&L+vGrU&n0w*& Rs]g2g`D#~okaun!Q~t[Ri.i5 =9}T/=SBk:=}GWHfo/!SN.' );
define( 'LOGGED_IN_KEY',     '_]*%nj]j-O*6yy3vuL-z@Wv-cnQM+|2MMpdU)h)1mAY0a*Nav%~gMz?Y/Nc<-Qi!' );
define( 'NONCE_KEY',         '~X:{#wU-2Ky{wxa;.szJYDpG6@Mrd_}D!JrcmXsHA*tF[WItxE[gti%Z{$M4#D!a' );
define( 'AUTH_SALT',         'Xmo9;~q9&YmZ9 @kY-9#-8dOnclN{2Td[s:Y6%Qhru&5@cEO1w*GhuS*r7T>l3a?' );
define( 'SECURE_AUTH_SALT',  'Nx1p80}@Wdj&9LwR`+/>)KszddNf*gzZmf,dx@upCPVa<0hu&.=Ez-xjuep9oX(@' );
define( 'LOGGED_IN_SALT',    'V``0)MF_Xmi}95Yxr?qA9nBZydJPG,>4aUW cj(.7un2NjRt67gN)1!,Q:8)RU.G' );
define( 'NONCE_SALT',        '9?Yc(:RtfOWy-?|ct(q~^OZ;H$w|d_JUBKoVO:(]J*pMYLSKmLR27v:^c4ttczqa' );
define( 'WP_CACHE_KEY_SALT', 'tB>Z@FOqK=F*JYbF0Cs!!Wv5,O+}wdZ% or.<XB3iJN!./^fy0]x2nSdFTw|?vBX' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
