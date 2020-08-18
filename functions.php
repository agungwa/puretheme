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
        add_action( 'wp_enqueue_scripts', array( $this, 'pth_register_styles' ) );
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
   
}

function PTHEME(){
	if( ! class_exists('puretheme') ){
		// what required
		// die();
	} else {
		return puretheme::instance();
	}
}

$GLOBALS['puretheme'] = PTHEME();
    

