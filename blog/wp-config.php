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
define('DB_NAME', 'i583046_wp1');

/** MySQL database username */
define('DB_USER', 'i583046_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'Z@ySi(f1ss28]^5');

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
define('AUTH_KEY',         'N7bx0wJEiM8v95yZqBb35MFbkWKGmgJNG4YxjtbmYgnuX0ibI6xjbhxIJupWY6B2');
define('SECURE_AUTH_KEY',  'T3Tqz90TaNszfMnOvLHhcP3wv8pSbhf5wh2zBaUY9cByBfQYnWffxYvHKtiXRYkU');
define('LOGGED_IN_KEY',    'V5k15PJuWA86isIAoQ6LhCVuSm90FG10v8WVGa41CgVl7I0LZPwuIdIGsGVglUCj');
define('NONCE_KEY',        'iPR5EJve0VTjxXE1kTuJjTLmptUIGS3n063CwwOjkWwj9X6cHIYm4q60kjZTF28p');
define('AUTH_SALT',        '56Wl5FWojiRB7IooXWQoOqmOPZiYSrhqUKmgry8uRhjtSyPGkEiLA4bqDxZE0nJC');
define('SECURE_AUTH_SALT', 'FiqQHxZ3p5N7tpSSc6645AqaBiznHsXl1VOisS6DkteFhs7i9QPDf63zbeUAGI4e');
define('LOGGED_IN_SALT',   'PQDJLHAu64mdevd0KwMRQ7vSWMt1fOZJ6Wf6WKu1EsEDWJ28tUgVZM2oes4TwOG3');
define('NONCE_SALT',       '9vOyO0Pds1kAjKs6bC4YMASritnXePij0UO36YDuQR07IlJtBV4gn3bsiJ1Atrnm');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
