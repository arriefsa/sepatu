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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sepatu' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'T#Tp.W?{>>38=3Fz~k6mjO1#fyeM/xz*dcp$0xra]j:,yuD%f<!V0SY-Z|et%t`q' );
define( 'SECURE_AUTH_KEY',  'RhY]Uf>P2<<MKI7_j^j| VXk/LWv2$}mejIAr<t48%FKb~oJFG31,LPg0[|Bnv*P' );
define( 'LOGGED_IN_KEY',    '><h2&B*My&Ii5iwg#Y#B2+5? Y>5qV^TQxi8lV.XfL @UJga^+Zj/}X9BL}A*K~A' );
define( 'NONCE_KEY',        'LASHn}b)8JWD]z`R0Ef{*;LR.`5~K(]{VhcwsQ?W6Fup1?LKPn@u,yA~T8wT~X:K' );
define( 'AUTH_SALT',        'b}9z_>]fDNIE<q4i$lj8Ke!([{VSmy SD,q6c#2a}lVn-x3^AWX$b1`yIFh}BsZ8' );
define( 'SECURE_AUTH_SALT', '/(6STy@]H~uQMI9mK390X|_F=wCXNd+}U_[U~X9`i;B{L,qbqZ^Xmb(IGGBi:Q1m' );
define( 'LOGGED_IN_SALT',   '{-)zvB#AfDzldh&0/PnHTgfftphY48-NHb<M?_$I_yS*f]36UQ=3G^)8Q X3JjSd' );
define( 'NONCE_SALT',       'ObE6x(QF}fGB8q5v%[4a!7bnYX=q@Z.);?ZemvLLM]G<s2rZ,#AX2-mXh)0Xm{UV' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'data_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
