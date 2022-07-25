<?php
   register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'polysil' ),
        'topbar' => __( 'Topbar Menu', 'polysil' ),
        'footer_menu1' => __( 'Footer Menu 1', 'polysil' ),
        'footer_menu2' => __( 'Footer Menu 2', 'polysil' ),
        'bottom_menu' => __( 'Bottom Menu', 'polysil' ),

    ) );
    function mytheme_post_thumbnails() {
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
    }
    add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );
    function polysil_widgets_init() {
         register_sidebar( array(
        'name'          => __( 'Product page sidebar', 'polysil' ),
        'id'            => 'sidebar-right',
        'description'   => __( 'Add widgets here to appear in your product page.', 'polysil' ),
        'before_widget' => '<div class="">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
        ) );

        register_sidebar( array(
            'name'          => __( 'News page sidebar', 'polysil' ),
            'id'            => 'sidebar-news',
            'description'   => __( 'Add widgets here to appear in your product page.', 'polysil' ),
            'before_widget' => '<div class="">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ) );
        register_sidebar( array(
            'name'          => __( 'Facebook', 'polysil' ),
            'id'            => 'facebook-widget',
            'description'   => __( 'Add widgets here.', 'polysil' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );

         register_sidebar( array(
        'name'          => __( 'Subscription', 'polysil' ),
        'id'            => 'subscription',
        'description'   => __( 'Add widgets here.', 'polysil' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
        ) );
         register_sidebar( array(
        'name'          => __( 'Footer', 'polysil' ),
        'id'            => 'footer',
        'description'   => __( 'Add widgets here.', 'polysil' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
        ) );
    }
    add_action( 'widgets_init', 'polysil_widgets_init' );
    
    function polysil_scripts() {

        wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array() );
        wp_enqueue_style( 'bootstrap_style', get_template_directory_uri() . '/css/bootstrap.css', array() );

        wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css', array() );

        wp_enqueue_style( 'line', get_template_directory_uri() . '/css/line-awesome.min.css', array() );

    	wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.min.css', array() );

    	wp_enqueue_style( 'theam_style', get_template_directory_uri() . '/style.css', array(),'202001' );


    	wp_enqueue_script( 'jquery' );

        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array( 'jquery' ), '2020', true );
    	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array( 'jquery' ), '2020', true );
        wp_enqueue_script( 'boostrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '2020', true );
    	wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array( 'jquery' ), '2020', true );
        wp_enqueue_script( 'owl_js', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), '2020', true );
        wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array( 'jquery' ), '2020', true );
        wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array( 'jquery' ), '2020', true );
        wp_enqueue_script( 'html_shiv', get_template_directory_uri() . '/js/html5shiv.js', array( 'jquery' ), '2020', true );
        wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/respond.min.js', array( 'jquery' ), '2020', true );

    }
    add_action( 'wp_enqueue_scripts', 'polysil_scripts',9999,1 );
    add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 3);
    function special_nav_class($classes, $item, $args){

        if( in_array('current-menu-item', $classes) ){
            $classes[] = 'active ';
        }
        if($args->add_li_class) {
            $classes[] = $args->add_li_class;
        }
        return $classes;

        return $classes;
    }
add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );

function wpse156165_menu_add_class( $atts, $item, $args ) {
    $class = 'nav-link'; // or something based on $item
    $atts['class'] = $class;
    return $atts;
}
function custom_submenu_class($menu) {
    $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);
    return $menu;
}

add_filter('wp_nav_menu','custom_submenu_class');
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function custom_posts_per_page( $query ) {

    if ( $query->is_archive('cpt_name') || $query->is_category() ) {
        set_query_var('posts_per_page', 12);
    }
}
add_action( 'pre_get_posts', 'custom_posts_per_page' );
?>
