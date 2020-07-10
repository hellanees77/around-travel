<?php 
function my_scripts() {


    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '3.3.4', 'all' );

    wp_enqueue_style( 'zerogrid', get_template_directory_uri() . '/assets/css/zerogrid.css', array(), '4.3.0', 'all' );
    wp_enqueue_style( 'responsive',get_template_directory_uri() . '/assets/css/responsive.css' );




    wp_enqueue_script( 'jquery-1.4.2-js', get_template_directory_uri() . '/assets/js/jquery-1.4.2.js', array('jquery'), '3.3.4' );
    wp_enqueue_script('cufon-yui-js', get_template_directory_uri() . '/assets/js/cufon-yui.js' );
    wp_enqueue_script('cufon-replace-js', get_template_directory_uri() . '/assets/js/cufon-replace.js' );
    wp_enqueue_script('Myriad_Pro_600-js', get_template_directory_uri() . '/assets/js/Myriad_Pro_600.font.js' );
    wp_enqueue_script('css3-mediaqueries-js', get_template_directory_uri() . '/assets/js/css3-mediaqueries.js' );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

/**
 * Add Menu
 */
add_theme_support( 'menus' );

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
    'top'     => __( 'Top' ,'zaroundtravel'),
    'top-menu'=> __( 'Top Menu', 'zaroundtravel' ),
    'social'  => __( 'Social Links Menu', 'zaroundtravel' ),
    'footer'  => __( 'Footer Menu' , 'zaroundtravel')
    
) );


/**
 * CUSTOM FUNCTIONS
 * ****************
 */
// $functionpath = TEMPLATEPATH.'/functions/';
// require_once($functionpath.'/redux-framework/ReduxCore/framework.php');
// require_once($functionpath.'/redux-framework/options-config.php');


?>