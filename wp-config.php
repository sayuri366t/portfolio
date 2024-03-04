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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'NetO!52F;^i&(]P}cvueQM,=EXdq5]@0pj.%:5Y3Pw;S9XX8puv9]K(7yaD]w0g2' );
define( 'SECURE_AUTH_KEY',  '9#Z//hXn2s%W>m}LG;:#U-Ye*#vrF8ZV|/jCQ}[1oTSG> %z%?|1@k$/Q}v*85XM' );
define( 'LOGGED_IN_KEY',    'Uz4FZJu4:}cs.aer(dndDU,[vw|(|{]>E)|-|9qy+eC_.zy`N0?HRIkT2>*Yj#?^' );
define( 'NONCE_KEY',        'S!%j`|u%ups70&1;0Y*X#4A7xGm2 J~<S^j4n*6.V`UTusc<EnHL0PadwkqvaEYt' );
define( 'AUTH_SALT',        ';gIxbnfY{x2zq*ck3>![;*UUOeT:%#|4T-j&s8mKc?U^ex)}wAntMm!0m.=FV3~I' );
define( 'SECURE_AUTH_SALT', 'zv*=cXaNxvQk+3pD3@n9@l3ek_o-s`n_%_Nh^HvUudAV8W L_//dTLdg/FVP4[5f' );
define( 'LOGGED_IN_SALT',   'I ?1gNlFs+fkxRDe rn}FB6^}$_gF(FyJ!0SKVeu,IjPB[x|2ZJ5HA0N/HdtR=I[' );
define( 'NONCE_SALT',       'N4:6IWJ%c2Kae`&KcUn)Nh9(j?_``aUz6o7$}Gb0gfYUBzc%Lom|JU|N*oxNPE1K' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
