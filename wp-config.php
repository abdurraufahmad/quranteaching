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
define('DB_NAME', 'quranteaching');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?jDWVv4a04%Ob177diHLGqjqD!t1.3A)UPO+a^,V#5j`Qraz]%H4`_t,WZKsE*Vu');
define('SECURE_AUTH_KEY',  '@:A9(3|$~bEM$;~@tG=@gHZ[98awB.-q3]EUq3+JQ3u|oC^F|@N?my$PPAto_&GH');
define('LOGGED_IN_KEY',    '4lhn/GPZc>%+jO`|W^YO2CENd`G3IWfbT$x~.DB<D{6#qmd!4W~P=3)D&I}jti{z');
define('NONCE_KEY',        '$>]yerP_xE1&Iy(|?-y!&8CjkIb~W3A/S59:=3t6rgtTh[d&_ks|hgm)mn[(l<[e');
define('AUTH_SALT',        ':B|B!8]o.cK^?d~];TsbQADS,C=p`URf$?nXrF*Gz6&u[]Vnw]h`jw:Embx=V;IQ');
define('SECURE_AUTH_SALT', '-uxl0:?)2+}H.5n<a)m+{B>&;z;c{_M,Vpf>zm0q2c@S@L]zfOV2AY39}4K/WsGV');
define('LOGGED_IN_SALT',   'z%sc-5&$z,nL^Ne?r0$l e<25c];Hh{qCp$.@~26.QWyeVz!]<M?7Lv^xno[y!T|');
define('NONCE_SALT',       'Ueh_JACkPx,M4.0uuX:n4bJYMA<>I#FVkyIQc,:Wtm[BUkO~(6=c9R~QT+)&?>Pk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'shakir_world_quran_wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
