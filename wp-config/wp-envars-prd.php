<?php
	// Prevent file from being accessed directly
	if (!defined('ABSPATH')) exit();
	if (!defined('WPINC')) define( 'WPINC', 'wp-includes' );
	
	require_once( ABSPATH . WPINC . '/option.php' );

	// DB
	define( 'DB_NAME', 'wp_dbname_prd' );
	define( 'DB_USER', 'wp_dbuser_prd' );
	define( 'DB_PASSWORD', 'dbpas_prd' );
	// Debug
	define('WP_DEBUG', false);
	define('WP_DEBUG_LOG', false);
	define('WP_DEBUG_DISPLAY', false);
	// Extra Custom constants
	define('API_URL',     'https://api.blog.com');

	if ( '0' == get_option( 'blog_public' ) ) update_option('blog_public', 1);