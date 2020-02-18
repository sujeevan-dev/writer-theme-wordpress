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
define( 'DB_NAME', 'writer_theme_wp' );

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
define( 'AUTH_KEY',         ' -dSI9If+j]g!e*,`cG0WC%B:01=V@A>m|xa,,P`;{/9y3@PXbY]f:;gB?28L0dc' );
define( 'SECURE_AUTH_KEY',  '|VSZROS:={5`hr-mw%KzFqJ.a[kq+k&RW8:i_.$QaQVvVL|U[jW-B~218`K7/#DT' );
define( 'LOGGED_IN_KEY',    '%Bnp[-wt4v xTvo4h|g_+AS;$0}FzG^oC.ukFS^:7=Np*ndYY?E[C_ID/5*s~s~$' );
define( 'NONCE_KEY',        'DXG|qump1ie5U}<;7o7#fC%*-Nw!%)[.NBi*adZ@5D8l%hUKy=#Qwey%{&f% |Tg' );
define( 'AUTH_SALT',        'IeF_~t:FzHd_4xbD&FtA,TCa~WFZyeUf,MOJLEk|>sJAMaIh}AQoiITekWMrzVTi' );
define( 'SECURE_AUTH_SALT', '@Z?M?OB`o|C].q5x+B/Yin@aQIU0/w586b3}gXrV{}r_sbWt&#N8I*:s3:6:53I,' );
define( 'LOGGED_IN_SALT',   '5v]e}(&KhA~a(5>FDTiOS6ROFa:g;s;^f/L|;~}e)ZA4CC:&4~;}<cY;@i.&CQ7-' );
define( 'NONCE_SALT',       ']oSB~b?<#c#4W<QSOV^0x K%?r4HC^EaA5N^7c>LQT6p{CROP{{| o;bvV3dH!OJ' );

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
