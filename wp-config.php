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
define( 'DB_NAME', 'wp_bermudaexplorer' );

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
define( 'AUTH_KEY',         'g5`:rUo5%Rm>t4[dB.DXA7WHAn oaijeYw&~0{1[h%khI)S%)5!pv*6s6bkr~bcp' );
define( 'SECURE_AUTH_KEY',  '!`,IIByW^hDf)]2sg0u,VF46 3^{7=66`WEhZJq*U#3|nj[2I:.xs;RE&jV_& s5' );
define( 'LOGGED_IN_KEY',    '.l)4,1~^B-2$dv]5kKz+.7;fcYu;<wE9-=Xi$pUFk|Jtj9aRfxS0Y8`_85_2#V7T' );
define( 'NONCE_KEY',        'X3qrI2(U[QH=&j09k9>{}}<Nxw3<YhX0sbGP|3Sl)b3tNWsD`v|FzHM^[k7[6jM_' );
define( 'AUTH_SALT',        'E,51@VQsa{s~6SxbhIq-E4B!POHOK-`jTNQA{14vE`T-:e%s_iy@ZD~0GI7Gf^}J' );
define( 'SECURE_AUTH_SALT', 'HApE+,R{Ot@)Ttl9`%|dOvp1K(KxG.Xr;v!e</ZM|Uqsp&L[>,@?tn_sz/|Z*%;,' );
define( 'LOGGED_IN_SALT',   ' #bCQ~1;d+V6|#;P1pu*ai66)EU`#0`r0!tf{n!(?dtHl_!`}!f&GO7A8,1?~{$N' );
define( 'NONCE_SALT',       'Q+j)823 %_A<Q2|hyF90<a}_d<?Z:.e@XcH:wA&r4],}8?x8mIlst~WV=H)4}v^}' );

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
