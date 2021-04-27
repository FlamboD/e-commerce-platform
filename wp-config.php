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
define( 'DB_NAME', 'eComWeb' );

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
define( 'AUTH_KEY',         '/YOBeY;(_/0_*|b%C^MI|VY:l=)+wMh9C9yGk~^v)(vCm4Xj0!7cn48D$MRYnjIU' );
define( 'SECURE_AUTH_KEY',  'QoqsZ1g<B=XVEcUXsr:75eIO[f:2ugllvFW7~q1Bcb{!7+8N:?&W.{mNq7O:KD2$' );
define( 'LOGGED_IN_KEY',    ' >+KE$-=}a-*&pf~*?|=ZE?m&AQ0I[UFm^C,?4L<xaKt&wc/2Sx4Hl-mr1mCPTc2' );
define( 'NONCE_KEY',        'Qgp,YX=%Z9&_[0?mv1.J2Y`Nyyl BXU3)=kW2ABgco:U6,G0p,327d*<j:S4&rWe' );
define( 'AUTH_SALT',        'ma29ol^y+meyHN*3JRJAPs#f|K2L>c-duhE.6xw2yh&QVocz>8FsbnfPaar2b/eE' );
define( 'SECURE_AUTH_SALT', '5R4m*14k[I]z4yWPWeoC0A9T|mn)QocEYj&%Q)J$/*z*xAt,xNpzd+hH;q/J|2Q8' );
define( 'LOGGED_IN_SALT',   ' Qf8DO>mnmD/>ZZ>[;H9_ +QAeV@YN~r`+o;|e0zJ41( :lkO1BfFaU:9S)U0/!a' );
define( 'NONCE_SALT',       'i3S%/j(EE>Vt876:as=mpS^Fx.US$CWYv.b.k81%ZVv<;KXh%,qg8/Jy?XI#|Isu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pr16_';

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
