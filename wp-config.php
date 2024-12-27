<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
define('WP_CACHE', true);

define('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);


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
define( 'DB_NAME', 'masterqu_aca' );

/** MySQL database username */
define( 'DB_USER', 'masterqu_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Y24(2pyu)S' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'P/.%!A*wj?kL#iOoV/*:YIQpZ7(vhjHE+z0/agasKNTx>*j!3>+Rj(ikOaN<fITA' );
define( 'SECURE_AUTH_KEY',   '%eQ>e U(|+E!JoD(WcxUgvr7^A(;[vkoX%9gGVQnLs>P%`;$A2&j:7HUA5!P8n01' );
define( 'LOGGED_IN_KEY',     'UQ`TS@R3r*C3@Jzy|n_R5z!?C {x(IkUISD%ot>|6Fia!XB0W5Q4?;q!$U B&#`q' );
define( 'NONCE_KEY',         'JWYo1`0k&<mn&9&cCHxP[9,{h-p%[|W$tExadQrWdXQNh^@#hFho`~r=]KEdOU(c' );
define( 'AUTH_SALT',         '!bpf?}KHQWdms^R=g@Qt%ILWg2O0%B-3I70pw6?+B^Sv:tw/T|_4XW.+~%LG`i|J' );
define( 'SECURE_AUTH_SALT',  'kFr~EOGj;_67wlgC/s/jqKF`hOd8vqO9M$uJ*2k&`chyb^cSj9G78:}5[&[w8m{z' );
define( 'LOGGED_IN_SALT',    '1!]I&2pi$KglTy^{T<GKB~4,~CfIloK@K !5UPt.~yPn|-SH[+=Gz<X}ps!(NW^!' );
define( 'NONCE_SALT',        'h]d<9~4CU#YfWk7(F93ftVDW/ MvHkr84:A!?~EUK?[-O>;q7<aOkwBx-9D4O4Ve' );
define( 'WP_CACHE_KEY_SALT', 'tI*7xdaVN{}Io~6t>V_8CETjF&$!aR7nmgPbMC!b9C1zMTOv.TEeA@kO#0Rr4/yq' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpj6_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
