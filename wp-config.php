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
define( 'DB_NAME', 'dbgithub' );

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
define( 'AUTH_KEY',         '23(56UL!Bty#6Tb.Bd =#:x+wQH^JsdLywMvk/]OcuM5gBvtKlc*CgJ/w#dYWKL&' );
define( 'SECURE_AUTH_KEY',  'T8xAd)rE8<O rF(L Ql|1!dL~FM2hGcpP:#3BCJ&i7n+mpJ`W:hy&{aSU~`;Uh5v' );
define( 'LOGGED_IN_KEY',    'd=_8TG08T.?Jx<XPs-EQ@V4N0~iE;}I_O_7SdnuS1!Yu*Rq)4A^M4AH`S_PFR%s<' );
define( 'NONCE_KEY',        'l!b@?iLr{zgjC8=:T%?N!@R)jRA-n+A)j-,G8@v#I./}C8fA.^&ge*/ixF]!P.Iy' );
define( 'AUTH_SALT',        '?{Tb/dHSic|;P%7g%OH5Dz5v1[=s4rc-E=1QIdcVL@L,jnBD((~s170!/D4Ua5!R' );
define( 'SECURE_AUTH_SALT', '_I=(IW3IPZT#$A!%S1ilxVPxt{WT:nSsqoFV&aaizvBH2`9<7UG9KzN/G(57-yC4' );
define( 'LOGGED_IN_SALT',   '>?{7(=FtLSI9HSj.tum}Gb$/aoyseH5WriASVz_[Z+u<VgvI|PjnR KeBK#~xi=j' );
define( 'NONCE_SALT',       '`K}^Dc/qDed(ekX {4MPZ;/v>d*HU^lK>,m0G)+n7x7z?Bp#3AnvqhtQRe}V> O5' );

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
