<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'p.A297;(qdJ>@~v-N.n-0)^W]wvdy5w`|ir)isM3f&:Re~dP.U,)b0t:]3Xk!IO%');
define('SECURE_AUTH_KEY',  'xPa=O Q3@/ERd35@!F:!A,Rn~4k-IK`%0H1Z&>U-O(iZdn(:tnv/9-(HPKW }6v*');
define('LOGGED_IN_KEY',    'L-mD/pPa41cI@aZCG6Bs42uZTsWa.5,Cfp?n2TLSf|69T,g5A;9g1/0N;$pZ7(,`');
define('NONCE_KEY',        'Iu!MNl#qWki(2|ETYa5x]K<vYd^kL%d(_]agfA]VD0H+GRA<t;G?-)clf|}Pg~e8');
define('AUTH_SALT',        '.R0eO O}nt?)XV<j|6Lc7x]KI1*@gfPmOa9x-<!(Waz&T,=Dy5(9);N;P{PMD)_U');
define('SECURE_AUTH_SALT', 'Dpb;s%Utb0Af+q*3}`&d`|g%T~w(wt3*W^Su#%k+~=uS/.-Hk(1:jo&,bnU:M^Ux');
define('LOGGED_IN_SALT',   ' +*-SlNgYZq_KR7uxWB5hphr1N8K=NkFCzT&<hjD/B cUjnc@jFxjqBWS^L=a>gC');
define('NONCE_SALT',       '8`7X9FD9W]geO=A=OGAg-hm|P2si_,r41232f=ljcF,m}i.auA=!HP{_x85bX,?M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
