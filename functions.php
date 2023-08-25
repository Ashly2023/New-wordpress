<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


/*
 *   Register navigation menu starts here..
 */
add_action('init', 'register_theme_menus');
function register_theme_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'main-menu' => __('Main Menu'),
        )
    );
}

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init()
{
    register_sidebar(
        array(
            'name' => 'Home left sidebar',
            'id' => 'home_left_1',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="rounded">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'arphabet_widgets_init');

function my_add_excerpts_to_pages()
{
    add_post_type_support('page', 'excerpt');
}
add_action('init', 'my_add_excerpts_to_pages');
/**
 * Enqueue scripts and styles.
 */
function things_scripts()
{
    
    wp_enqueue_style('things-bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null, 'screen');
    wp_enqueue_style('things-font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css', array(), null, 'screen');
 

    wp_enqueue_style('things-style', get_stylesheet_uri(), array(), null);



    wp_enqueue_script('things-jquery.min', get_template_directory_uri() . '/js/jquery-3.6.1.min.js', array('jquery'), null, true);
    wp_enqueue_script('things-bootstrap.bundle.min', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('things-owl.carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), null, true);
    wp_enqueue_script('things-aos', get_template_directory_uri() . '/js/aos.js', array('jquery'), null, true);
    wp_enqueue_script('things-smoothscroll.min', get_template_directory_uri() . '/js/smoothscroll.min.js', array('jquery'), null, true);
    wp_enqueue_script('things-jquery.paroller', get_template_directory_uri() . '/js/jquery.paroller.js', array('jquery'), null, true);
    wp_enqueue_script('things-swiper.min', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'), null, true);
    wp_enqueue_script('things-jquery.magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array('jquery'), null, true);
    wp_enqueue_script('things-main-slider', get_template_directory_uri() . '/js/main-slider.js', array('jquery'), null, true);
    wp_enqueue_script('things-scrollIt.min', get_template_directory_uri() . '/js/scrollIt.min.js', array('jquery'), null, true);
    wp_enqueue_script('things-theme-script', get_template_directory_uri() . '/js/theme-script.js', array('jquery'), null, true);


}
add_action('wp_enqueue_scripts', 'things_scripts');

/*uploading additional file types: upload_mimes filter */



locate_template('/things/kirki/kirki.php', true, true);

if (class_exists('Kirki')) {
    locate_template('customizer', true, true);
}


 
//KIRKI CONFIGURATION
 
Kirki::add_config( 'theme_config_id', [ //Make sure to change the theme_config_id
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
] );
 
add_filter( 'kirki_telemetry', '__return_false' );

 



