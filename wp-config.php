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
define( 'DB_NAME', 'telusko' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Falcon)2$7' );

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
define( 'AUTH_KEY',         '|wy;C~}`RiOicXc6u[Q5;k_AvN9fEzs#yPwKtzK;vzb`P>n,vEa94cWeOnCp+PME' );
define( 'SECURE_AUTH_KEY',  'G]tSoSQb)+#eO=;vUE-3H e1WFeq95*m?8eC3]3v4;5>;+hC,pT&u3%tZ[6]vD>z' );
define( 'LOGGED_IN_KEY',    'Q*S=|46d(20X~pW8;i_)kQW0}_(UJ=)C)C1r9bhmC3+5ST9=Fp1Y;v}TFqcPPM#[' );
define( 'NONCE_KEY',        'IuCT66s 1i(OFQvV-l9j@GrBMw-$?oL&$oIkq%L?vzX^>b/5Qm&A5*D]vP_XMpYJ' );
define( 'AUTH_SALT',        'fX?A|mbd2eJ7fy2n?4KnzWrY$)BA4*yvAqZ`$a{+jl:rrYMK;xbeK `NW6} fsxa' );
define( 'SECURE_AUTH_SALT', 'w6mmys]@jgs[&b{]Fx#zPP|H#*/MQv+x8{yg>E4WQN6UAJ18ZbO~P+)71`dnC_6}' );
define( 'LOGGED_IN_SALT',   's3LPPhMroA]u|[%_u:/bj{eZfg42%IxO,^DUiG>=`mdE!3r^)|BH*v`y;glFwo/*' );
define( 'NONCE_SALT',       '8Mk9J~HXI2TVyxO4]P@b<Adka+WXGa&S=Kr=~7Vs:CNJ#1=WNe{&v.)D4uK0FOz(' );

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
