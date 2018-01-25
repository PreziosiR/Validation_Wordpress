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
define('DB_NAME', 'wp_validation');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'k!qt%cZo9:* GpW:urNrcQ2yp>4Lk(=JDa V`8=Q=ErF%C6J,&avX&{>Ck>{IH.K');
define('SECURE_AUTH_KEY',  'VzK^$gRO$j%kJ`id[GB}%ZvO1 g^Rjvs=W!uQ&;X2u9t0sVz5j!-LSZHqm0Y=40H');
define('LOGGED_IN_KEY',    'nZ:DQ@URzW6mQ]CTyG{YiS MFMZq?Xqy%HTRB;xqY%(!nzA|r3Y$TU`Lb,>Cda`F');
define('NONCE_KEY',        '9u^S1]YC{W&HIQNyB.,Q~h]J g2E(`l#u3T& NM+{7ox)d9(Au^xH)XJ=>JV=25t');
define('AUTH_SALT',        'htmH1$}, (;d7|IZ@cr?jQ:JCo_8aAo(KE9vSA7`~$B@k)G,IhZ1k5NJ+[z0nOPK');
define('SECURE_AUTH_SALT', '(lg)pt2Mq!wjQOsU^M9`1F-Rz/nccv]do!YsPSWlhGvSp6p$AK8%1bK`|&GbT_k6');
define('LOGGED_IN_SALT',   'AC9eO@~LP6FOa0=;O42*G<>3~x*006Y(,C*k4+13T$=}+iy?ZYt<UtuUJdsZ/SWS');
define('NONCE_SALT',       '9Y?;mt:g<t^=+-1Hl|da%Z!*}tSaU8sCTqgS!wCL(6}V>q&OVk~?vOn|j/}og?]%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
