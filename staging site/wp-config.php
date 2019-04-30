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
define( 'DB_NAME', 'ductuann_wp823' );

/** MySQL database username */
define( 'DB_USER', 'ductuann_wp823' );

/** MySQL database password */
define( 'DB_PASSWORD', '6uS@3u(gp5' );

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
define( 'AUTH_KEY',         'aszrzjfxqxurfuutyajshq5emwfcdft6yplal51chsxqbid5bnw5jxpbu2vgdixk' );
define( 'SECURE_AUTH_KEY',  'cw7pca6v50cacvy1ahvdyakvhj7vknthc4ymexbtveb2xgdcoqzwgekisbbldokl' );
define( 'LOGGED_IN_KEY',    'si8dlanvej4qd5ldqjuuvjatktkeaqh4xtvs0ohfgpzfdcwvzhouyifreexkilg4' );
define( 'NONCE_KEY',        'xcqyfmdwqfvpgju0ujaye2gbfuakzs3ixmwne8dslxu68iu3zubvs6euvsmeuu4l' );
define( 'AUTH_SALT',        'qp5tauukclmbatf2mba3vmt5yyobaatpygujgnzdcbfqux3efraijjeseuij6ghn' );
define( 'SECURE_AUTH_SALT', 'hifcewrugt89jd5xsfgbvtobwtnyem6si8ryhxtcsfdxys6ajcbqlkg5jvldicio' );
define( 'LOGGED_IN_SALT',   'suh9bch5siue0t5sk6ouz6w4tqdtnsaxgepo8vgcmhtxgflmdqxupf4ch9vap8yb' );
define( 'NONCE_SALT',       '3nfzrispxllcrd0d1pmapwjqfs89ck5syssorxt3wkrb0lrccywpbhovfrnyyhnb' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpae_';

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
