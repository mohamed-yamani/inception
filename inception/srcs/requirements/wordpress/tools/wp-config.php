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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_REDIS_HOST', 'redis host');

define('WP_CACHE_KEY_SALT', 'salt');

define('WP_CACHE', true);

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

 // https://api.wordpress.org/secret-key/1.1/salt/ 
define('AUTH_KEY',         'H$KaT=3;(#hFb%PFH5/nVThUdDco|[aAe =6u`jsNjA&6u5g_zP*92OS{&~oh+%.');
define('SECURE_AUTH_KEY',  ';t^@N:d% Qud Dgyv!g9Cd*qg_[K-+8Ough.|?Bj@C`X!B5e[MoKQa6&eRQM{0J%');
define('LOGGED_IN_KEY',    'y$zs0RM4V++c9A{v{C0Z5S$AYO|vb[_iPG}2UKLN&Pqv+4m|QxCk).-$bB,4w`1v');
define('NONCE_KEY',        '<oNe4Kz;k7#wp5ox1i8FV-hRtNM(wplwc1|Wlkw+Ba?*pR(-Q0vf5;oPj+}wf?R1');
define('AUTH_SALT',        'N-az~#EQN^hr1/S5C<Q%n<VY7b)o$Jcd7 /oJh0+)ifw1K.QDG.H=jSdA~vP/jjB');
define('SECURE_AUTH_SALT', ')[G0([#5!m+5L_peRY8t(6 {F8V9$w2ccI$U*2Rgn-9_[ne&Ep-->[h S.sUf.${');
define('LOGGED_IN_SALT',   '$GEJpd`yrcYv9rg>7L$nU*[&CxZ)^E`N 5e[3&<^.zB4B9.1re$R@N2h9>!o& (B');
define('NONCE_SALT',       'U@KDAZ[#O>S{47@J14;18-YtRX+6PiP+3A?mX6?2#QS-6ApqoUTP]Hq%M7Kw1vON');

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';