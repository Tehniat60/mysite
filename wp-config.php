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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         'EA<>320#D_G4GqN/NiVi8hTHQm^Knk4L.,N?-aw)9vCC7TQ_vXja<%Apa-U[*o2R' );
define( 'SECURE_AUTH_KEY',  '~;80REc<c &5N|yV>=T=Pw&i;#S:BGWAcqw@_<ep!q{KfCO_JlC=_wX 4}QY#2&u' );
define( 'LOGGED_IN_KEY',    '%JXk3<}H+/3pq}=:4B>Iczduj0BDJA,3r7G_KOHHg{%+~.eFcU3_PNMdCy;;-E2+' );
define( 'NONCE_KEY',        '{VpmcHN}DF=7juC@(@/f|#k?[9qtI@rf/d_.!5b~n8xWPE51q~ANp}PS57#8*NsP' );
define( 'AUTH_SALT',        '+!9tn9?#Y!pcVHwZ:5e/X[F(Pj7mHlfvDHc&!qWE=9uo3O#8K{+_c8Pg[`?e3}T1' );
define( 'SECURE_AUTH_SALT', ',j5M[Gn<XR8eokP@J{G$Z)!L*0JrJy1$V.CA=@0]<Yd0M7vuAuDQGOk`X-8Qw/Ro' );
define( 'LOGGED_IN_SALT',   'U[r}+f42Uu?qG@gN:.b?-& sS$WRL(o.*YxQY/w`:=m}qgdp%MrRb>;6}_;j8t-8' );
define( 'NONCE_SALT',       '.bX2ohsS|@|}Aj1ho0?#{esMNSe)-P,LBWu7|^9knwYsrIw`hX-TLT3BG$j<B}cg' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
