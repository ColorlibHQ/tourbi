<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Define constant
	 *
	 */
	
	 
	// Base URI
	if( !defined( 'TOURBI_DIR_URI' ) )
		define( 'TOURBI_DIR_URI', get_template_directory_uri().'/' );
	
	// assets URI
	if( !defined( 'TOURBI_DIR_ASSETS_URI' ) )
		define( 'TOURBI_DIR_ASSETS_URI', TOURBI_DIR_URI.'assets/' );
	
	// Css File URI
	if( !defined( 'TOURBI_DIR_CSS_URI' ) )
		define( 'TOURBI_DIR_CSS_URI', TOURBI_DIR_ASSETS_URI .'css/' );
	
	// Js File URI
	if( !defined( 'TOURBI_DIR_JS_URI' ) )
		define( 'TOURBI_DIR_JS_URI', TOURBI_DIR_ASSETS_URI .'js/' );
	
	// Icon Images
	if( !defined('TOURBI_DIR_ICON_IMG_URI') )
		define( 'TOURBI_DIR_ICON_IMG_URI', TOURBI_DIR_ASSETS_URI.'img/icon/' );
	
	// Animate Icon Images
	if( !defined('TOURBI_DIR_ANIMATE_ICON_IMG_URI') )
		define( 'TOURBI_DIR_ANIMATE_ICON_IMG_URI', TOURBI_DIR_ASSETS_URI.'img/animate_icon/' );
	
	//DIR inc
	if( !defined( 'TOURBI_DIR_INC' ) )
		define( 'TOURBI_DIR_INC', TOURBI_DIR_URI.'inc/' );

	//Elementor Widgets Folder Directory
	if( !defined( 'TOURBI_DIR_ELEMENTOR' ) )
		define( 'TOURBI_DIR_ELEMENTOR', TOURBI_DIR_INC.'elementor-widgets/' );

	// Base Directory
	if( !defined( 'TOURBI_DIR_PATH' ) )
		define( 'TOURBI_DIR_PATH', get_parent_theme_file_path().'/' );
	
	//Inc Folder Directory
	if( !defined( 'TOURBI_DIR_PATH_INC' ) )
		define( 'TOURBI_DIR_PATH_INC', TOURBI_DIR_PATH.'inc/' );
	
	//Colorlib framework Folder Directory
	if( !defined( 'TOURBI_DIR_PATH_LIB' ) )
		define( 'TOURBI_DIR_PATH_LIB', TOURBI_DIR_PATH_INC.'libraries/' );
	
	//Classes Folder Directory
	if( !defined( 'TOURBI_DIR_PATH_CLASSES' ) )
		define( 'TOURBI_DIR_PATH_CLASSES', TOURBI_DIR_PATH_INC.'classes/' );

	
	//Widgets Folder Directory
	if( !defined( 'TOURBI_DIR_PATH_WIDGET' ) )
		define( 'TOURBI_DIR_PATH_WIDGET', TOURBI_DIR_PATH_INC.'widgets/' );
		
	//Elementor Widgets Folder Directory
	if( !defined( 'TOURBI_DIR_PATH_ELEMENTOR_WIDGETS' ) )
		define( 'TOURBI_DIR_PATH_ELEMENTOR_WIDGETS', TOURBI_DIR_PATH_INC.'elementor-widgets/' );
	

		
	/**
	 * Include File
	 *
	 */
	
	// Breadcrumbs file include
	require_once( TOURBI_DIR_PATH_INC . 'tourbi-breadcrumbs.php' );
	// Sidebar register file include
	require_once( TOURBI_DIR_PATH_INC . 'widgets/tourbi-widgets-reg.php' );
	// Post widget file include
	require_once( TOURBI_DIR_PATH_INC . 'widgets/tourbi-recent-post-thumb.php' );
	// News letter widget file include
	require_once( TOURBI_DIR_PATH_INC . 'widgets/tourbi-newsletter-widget.php' );
	//Social Links
	require_once( TOURBI_DIR_PATH_INC . 'widgets/tourbi-social-links.php' );
	// Instagram Widget
	require_once( TOURBI_DIR_PATH_INC . 'widgets/tourbi-instagram.php' );
	// Nav walker file include
	require_once( TOURBI_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
	// Theme function file include
	require_once( TOURBI_DIR_PATH_INC . 'tourbi-functions.php' );

	// Theme Demo file include
	require_once( TOURBI_DIR_PATH_INC . 'demo/demo-import.php' );

	// Post Like
	require_once( TOURBI_DIR_PATH_INC . 'post-like.php' );
	// Theme support function file include
	require_once( TOURBI_DIR_PATH_INC . 'support-functions.php' );
	// Html helper file include
	require_once( TOURBI_DIR_PATH_INC . 'wp-html-helper.php' );
	// Pagination file include
	require_once( TOURBI_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
	// Elementor Widgets
	require_once( TOURBI_DIR_PATH_ELEMENTOR_WIDGETS . 'elementor-widget.php' );
	//
	require_once( TOURBI_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
	
	require_once( TOURBI_DIR_PATH_CLASSES . 'Class-Config.php' );
	// Customizer
	require_once( TOURBI_DIR_PATH_INC . 'customizer/customizer.php' );
	// Class autoloader
	require_once( TOURBI_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
	// Class tourbi dashboard
	require_once( TOURBI_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );
	// Common css
	require_once( TOURBI_DIR_PATH_INC . 'tourbi-commoncss.php' );


	if( class_exists( 'RW_Meta_Box' ) ){
		// Metabox Function
		require_once( TOURBI_DIR_PATH_INC . 'tourbi-metabox.php' );
	}
	

	// Admin Enqueue Script
	function tourbi_admin_script(){
		wp_enqueue_style( 'tourbi-admin', get_template_directory_uri().'/assets/css/tourbi_admin.css', false, '1.0.0' );
		wp_enqueue_script( 'tourbi_admin', get_template_directory_uri().'/assets/js/tourbi_admin.js', false, '1.0.0' );
	}
	add_action( 'admin_enqueue_scripts', 'tourbi_admin_script' );

	 
	// WooCommerce style desable
	add_filter( 'woocommerce_enqueue_styles', '__return_false' );


	/**
	 * Instantiate Tourbi object
	 *
	 * Inside this object:
	 * Enqueue scripts, Google font, Theme support features, Tourbi Dashboard .
	 *
	 */
	
	$Tourbi = new Tourbi();
	


/**
 * A page by title, without get_page_by_title().
 *
 * WordPress deprecated get_page_by_title() in 6.2; this keeps the same
 * signature and return shape so existing calls behave identically.
 *
 * @param string $title     Page title.
 * @param string $output    OBJECT, ARRAY_A or ARRAY_N.
 * @param string $post_type Post type to search.
 * @return WP_Post|array|null
 */
if ( ! function_exists( 'tourbi_get_page_by_title' ) ) {
	function tourbi_get_page_by_title( $title, $output = OBJECT, $post_type = 'page' ) {
		$query = new WP_Query(
			array(
				'post_type'              => $post_type,
				'title'                  => $title,
				'post_status'            => 'all',
				'posts_per_page'         => 1,
				'no_found_rows'          => true,
				'ignore_sticky_posts'    => true,
				'update_post_term_cache' => false,
				'update_post_meta_cache' => false,
				'orderby'                => 'post_date ID',
				'order'                  => 'ASC',
			)
		);

		$page = ! empty( $query->posts ) ? $query->posts[0] : null;

		if ( ! $page ) {
			return null;
		}

		if ( ARRAY_A === $output ) {
			return get_object_vars( $page );
		}

		if ( ARRAY_N === $output ) {
			return array_values( get_object_vars( $page ) );
		}

		return $page;
	}
}


/**
 * Editor and markup support this theme predates.
 */
if ( ! function_exists( 'tourbi_modern_supports' ) ) {
	function tourbi_modern_supports() {
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-styles' );
	}
	add_action( 'after_setup_theme', 'tourbi_modern_supports', 20 );
}
