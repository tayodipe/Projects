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
define( 'DB_NAME', 'Projects' );

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
define( 'AUTH_KEY',         '|.S@aNx@@xwl_^OD^}!TL-qiKd$eX?Nt|K=WX%-28O^x23e<J[b%VI|R3q[GC ;T' );
define( 'SECURE_AUTH_KEY',  'hPb4^0_n?{)CE_#$JH&9+j[}*_V[XI)X|6[57huuS>4V&^,R$+4JxKrJwqWS<Wbp' );
define( 'LOGGED_IN_KEY',    'XPO^5~X-cp$e!zd(<5%#@),u)2v]KA:$woq$B|LmSy?<n[[E&XA!Y:-Naf)=tM}8' );
define( 'NONCE_KEY',        'P}q+PVy]v.F))g90)K1u`dvt/Fp;1^7iN8lR2B{2Tcx#W7$,Rb-U!+pri%bNTNK*' );
define( 'AUTH_SALT',        'JHrepw<q`p5`g<xH((xkHPG=CWz}{(J=mS0rLt2s$B/Cv,xLlO(@5pxJhqJ%Inph' );
define( 'SECURE_AUTH_SALT', 'T1sU3G!VFht]05O7&/dL$$mCx@deF|s$mc0.(n)9:=</3f[)+c^U8A}eI0pP3W/]' );
define( 'LOGGED_IN_SALT',   '&%wo/A3mbYKn FoPxMUcv3kr#Q2Y?ykCD%|:+XKNQ 9yQ.HOq$>Dd3F>*$tOb/Ah' );
define( 'NONCE_SALT',       'LbL-SIzRSK).]WJNW} ^IFe%0[dKJ%v8l{yF$2%(_oRlT$!?kctj4WE.3C[]65J:' );

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
define( 'FS_METHOD', 'direct' );