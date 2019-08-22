<?php
	// Prevent file from being accessed directly
	if (!defined('ABSPATH')) exit();
	if (!defined('WPINC')) define( 'WPINC', 'wp-includes' );
	
	require( ABSPATH . WPINC . '/option.php' );

	// DB
	define( 'DB_NAME', 'wp_dbname_loc' );
	define( 'DB_USER', 'wp_dbuser_loc' );
	define( 'DB_PASSWORD', 'dbpas_loc' );
	// Debug
	define('WP_DEBUG', true);
	define('WP_DEBUG_LOG', true);
	define('WP_DEBUG_DISPLAY', true);
	// Extra Custom constants
	define('API_URL',     'https://api.blog.loc.com');

	if ( '1' == get_option( 'blog_public' ) ) update_option('blog_public', 0);

