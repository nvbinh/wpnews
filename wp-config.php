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
define('DB_NAME', 'wp-news');

/** MySQL database username */
define('DB_USER', 'local');

/** MySQL database password */
define('DB_PASSWORD', 'local123');

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
define('AUTH_KEY',         'IW0G]Vbfr::+L89&ftt{,%82_@Q~[&_{wHt8|dW/+L@6;#U(<<SR&D.kMoABt8kt');
define('SECURE_AUTH_KEY',  'ie+aR<qALPMNn+Nj4u`O&<(-e*UuvAfknau30z~82|3|Vg?16;$uJh{jW9%SmE3/');
define('LOGGED_IN_KEY',    'k3@C(~V)QapC ;ty=kF6Jue4487? VKluoX^!JT3M`Yt^OQoo#prF`l#bAytA{`L');
define('NONCE_KEY',        'Nh}wz|B!(6-.!Ta>Zl{isy9i+z/Jk#mi6&Rw{ MNEX{i;A|| j`g;_#=R.IzUj]-');
define('AUTH_SALT',        '%=<.NuobYg-rRW,QCz</l]e%XE/n/lQ~kV&->P0@{B+,XE=HC;63Es56O1k 9_kJ');
define('SECURE_AUTH_SALT', '|g!6uIrqJumt0}1fm8|<t-&r![+IYz-%G_mNXvqqk:#o1e{#:D#UC|u.+?nH$&`j');
define('LOGGED_IN_SALT',   'M,FB}E=#~F6W:WWLDm(Mr%e3qsBP|1ILAFTz<J*S=P`mDtmE53g^md2{nZhP$OCW');
define('NONCE_SALT',       'P;xqLT)WEKuA.Sa$N8Un<yIkJH lm$v@%-1F7L$Q-MA*SI#|U9nFo}f$2A0,nnC7');

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
