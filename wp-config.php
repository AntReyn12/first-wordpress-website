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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '.2wBM^M{TZ[Ib<0G8I/6NP>X29@C+G3_C3Xea8YO4~1S|)5z3#GSErCGis91eeJF' );
define( 'SECURE_AUTH_KEY',  'a<7Ki21BW5;j,asaBg9-BRNcWv=,+9el<RK:^6GER=JQi:UmjF}QPyJu|{{|M>>y' );
define( 'LOGGED_IN_KEY',    'z^:O)Rn[YORC?FiP(HU9Sb[XKCr0ef0Q}hLUmzTcoLxZRiAT8Ii`z&., #Z%{+*s' );
define( 'NONCE_KEY',        '^$jj.O|PK,~&{0N19@<3(snC~m7CQooqmr:9PqpE{qFt{&d@q|7;jf!9.a)yV*Mr' );
define( 'AUTH_SALT',        '[)^S34zy#p`!O0zdAu,5HwvbrCY>yNsYC?/{T3QJJB!}/v{:qKS?,Le/KG#w44pu' );
define( 'SECURE_AUTH_SALT', '}o_pXLfaTIZj}ZZ~LoCPLn~~Lr1d87SpAaJ@T5Dd%TpJk1;RZ(sk~sV >Gf^4|qA' );
define( 'LOGGED_IN_SALT',   ' P.(G4Q6&YX|1AshqWsl[U&};Xf:(|8EWlfB*j.|%I;{?L}23CcK0{7[F1koU{jc' );
define( 'NONCE_SALT',       ' X@QJ3%FiJetOBgz1?5OJo>,o4:Op>Ec,LCipr63@T;+b2ba;U[YW?2cCEw{x6vt' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
