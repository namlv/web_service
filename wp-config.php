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
define('DB_NAME', 'web_service');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '?A)Y[HbMn76-T`(Op@q})kI%k=l;%h<(qy_Gy7u`Q4Tj5C<G(aVCQ3 ?^F{I7wNU');
define('SECURE_AUTH_KEY',  'RX0~rvP4XW*Nf1G1/o>cL#-a~0i^nmI2lWoJk;%Ts]gQs3WIZooWXyj_AptB3fQ>');
define('LOGGED_IN_KEY',    '#/{gezHz(!)T7z/[Q[-/$bLI..@^=naO(bl(`iRZl[sjwl48P&H#z=?:rC;t=6)!');
define('NONCE_KEY',        'P>wcIKlyU}k&$v81ieMhkN= kDF)S~sbixP/jAn:G*m8ybWiEB8^IKpfp{V$CbD1');
define('AUTH_SALT',        '&gH~uR_eNdmoE2usv~}<eUb2k<)0)D1_l/4iKgEsmKX{`${|`z08QG6;ybzc5Zzj');
define('SECURE_AUTH_SALT', '<t]J<1Ed`n0@3wgcf^W-Ho>yvq|T|^bV.||DNPUkZQ26QuFxb<X@,v#%p-0`h~xV');
define('LOGGED_IN_SALT',   'knApZ$ N{T/ei:Kw/C+AjGkA,:GMR_v%Djg!=L&9rSR&QKyl;v[x;j=(@{n Q:^+');
define('NONCE_SALT',       'l?6DV{6@2#{#NMY[AN/lbxzQ,IHS/=76_FlAn~6Cq9],AO11+/r5BD0J+ _`[20S');

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
