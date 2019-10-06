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
define( 'DB_NAME', 'naqi' );

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
define( 'AUTH_KEY',         'Sx(6oD&: g@7M?Z7GjrA!lzHfJ7kQ^YE.*@5&NjRW`NX.-)TD_sYK%CHd{#-6X]m' );
define( 'SECURE_AUTH_KEY',  'H{>GrGoV=2mBHj,#uZ3r/bbVLk@ o)`m7Iz%Q5w^id[RyKdrn<-S5.&gamOxlI6;' );
define( 'LOGGED_IN_KEY',    '%ggduv;:T![/B,UMc0aU /HOGh~TmGzl,K~r-UrC=(VWP3GZop6a,JEbvD{lw5Cc' );
define( 'NONCE_KEY',        'B}OG_-q%$F.#+8YLSYWjmY1gPwya`<D-r9v `sTVU}Q;y%6uajg8du/9:3gm9Ye)' );
define( 'AUTH_SALT',        '<$Qj$,?s_/`!ST^c`vZgOSoFn?*F2<VfD[AgdHV0;NsJVHZ!`ssNUvDv(U+XiX|A' );
define( 'SECURE_AUTH_SALT', 'Awo/_,|z7q_#bCL5H:U0l1N91]1,)8*:4@OXv@r)Y;ey0ffr5W<1Ts2h?U6Qj/|^' );
define( 'LOGGED_IN_SALT',   'g4_6;pUySCS7rxk(2f-/uL^HY8TKPYpNu[IO_-qj/]_%XD?YWbxygBI DcOu7QQK' );
define( 'NONCE_SALT',       '!@I<[nPE.B]|q!(Q6xAv,0S$/siDd<VA}+!y.N&JNLNFR[#,H`e%$7:pcIj`W*BN' );

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
