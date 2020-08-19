<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class puretheme{

	protected static $_instance = null;
    
    public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
    
    public function __construct()
    {
        $this->init();
        $this->version();
    }
 
    public function version(){
        $version = wp_get_theme()->get( 'Version' );
        return $version;

    }

    public function init()
    {
		add_action( 'after_setup_theme', array( $this, 'pth_setup_themes' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'pth_register_styles' ) );
		add_action( 'init', array( $this, 'pth_custom_post_archive' ) );
    }

    function pth_register_styles()
    {  
        wp_enqueue_style('pth-google-font', "https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700", array(), $this->version());    
        wp_enqueue_style('pth-fontawesome', get_template_directory_uri(). "/assets/lib/font-awesome/css/font-awesome.min.css", array(), $this->version());    
        wp_enqueue_style('pth-bootstrap', get_template_directory_uri(). "/assets/lib/bootstrap/css/bootstrap.min.css", array(), $this->version());    
        wp_enqueue_style('pth-animate', get_template_directory_uri(). "/assets/lib/animate/animate.min.css", array(), $this->version());    
        wp_enqueue_style('pth-ionicons', get_template_directory_uri(). "/assets/lib/ionicons/css/ionicons.min.css", array(), $this->version());    
        wp_enqueue_style('pth-owlcarousel', get_template_directory_uri(). "/assets/lib/owlcarousel/assets/owl.carousel.min.css", array(), $this->version());    
        wp_enqueue_style('pth-lightbox', get_template_directory_uri(). "/assets/lib/lightbox/css/lightbox.min.css", array(), $this->version());
        wp_enqueue_style('pth-style', get_template_directory_uri(). "/assets/css/style.css", array(), $this->version());  
        
        wp_enqueue_script('pth-jquery', get_template_directory_uri(). "/assets/lib/jquery/jquery.min.js", array(), $this->version(), true);
        wp_enqueue_script('pth-jquery-migrate', get_template_directory_uri(). "/assets/lib/jquery/jquery-migrate.min.js", array(), $this->version(), true);
        wp_enqueue_script('pth-bootstrap-bundle', get_template_directory_uri(). "/assets/lib/bootstrap/js/bootstrap.bundle.min.js", array(), $this->version(), true);
        wp_enqueue_script('pth-mobile-nav', get_template_directory_uri(). "/assets/lib/mobile-nav/mobile-nav.js", array(), $this->version(), true);
        wp_enqueue_script('pth-wowmin', get_template_directory_uri(). "/assets/lib/wow/wow.min.js", array(), $this->version(), true);
        wp_enqueue_script('pth-waypoints', get_template_directory_uri(). "/assets/lib/waypoints/waypoints.min.js", array(), $this->version(), true);
        wp_enqueue_script('pth-counterup', get_template_directory_uri(). "/assets/lib/counterup/counterup.min.js", array(), $this->version(), true);
        wp_enqueue_script('pth-owlcarousel-min-js', get_template_directory_uri(). "/assets/lib/owlcarousel/owl.carousel.min.js", array(), $this->version(), true);
        wp_enqueue_script('pth-isotope', get_template_directory_uri(). "/assets/lib/isotope/isotope.pkgd.min.js", array(), $this->version(), true);
        wp_enqueue_script('pth-lightbox-min-js', get_template_directory_uri(). "/assets/lib/lightbox/js/lightbox.min.js", array(), $this->version(), true);
        wp_enqueue_script('pth-lightbox-min-js', get_template_directory_uri(). "/assets/js/contactform.js", array(), $this->version(), true);
        wp_enqueue_script('pth-main', get_template_directory_uri(). "/assets/js/main.js", array(), $this->version(), $this->version(), true);
	}
	
		// A custom function that calls register_post_type
		function pth_custom_post_archive() {
		// Set various pieces of text, $labels is used inside the $args array
		$labels = array(
			'name' => _x( 'Archive', 'post type general name' ),
			'singular_name' => _x( 'Archive', 'post type singular name' ),
		);
		// Set various pieces of information about the post type
		$args = array(
			'labels' => $labels,
			'description' => 'My custom post type',
			'public' => true,
		);
		// Register the movie post type with all the information contained in the $arguments array
		register_post_type( 'archive', $args );
	}


    

    public function pth_setup_themes()
    {

		add_theme_support( 'pageviews' );
		add_theme_support( 'custom-logo' );
		add_theme_support( 'post-image' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 950, 850, true ); // used on page template category

		// add_image_size( 'video-thumb', 265, 185 ); // (cropped)

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		register_nav_menus(
			array(
				'dekstop' => __( 'dekstop', 'PureTheme' ),
				'social' => __( 'Social Links Menu', 'PureTheme' ),
			)
		);

	}

}



function PTHEME(){
	if( ! class_exists('puretheme') ){

	} else {
		return puretheme::instance();
	}
}

$GLOBALS['puretheme'] = PTHEME();
    

