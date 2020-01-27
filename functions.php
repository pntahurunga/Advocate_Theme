<?php 
    // Load the theme stylesheets
    
    function theme_styles()  
    { 
        
        wp_enqueue_style( 'style', get_stylesheet_uri());
        //wp_enqueue_style( 'icofont', get_template_directory_uri() . '/icofont/icofont.css');
        // wp_enqueue_style( 'icofont', get_template_directory_uri() . '/icofont/fonts/icofont.woff2');
        // wp_enqueue_style( 'icofont', get_template_directory_uri() . '/icofont/fonts/icofont.woff2');
        // wp_enqueue_style( 'icofont', get_template_directory_uri() . '/icofont/fonts/icofont.woff');
        // wp_enqueue_style( 'icofont', get_template_directory_uri() . '/icofont/fonts/icofont.woff');
        wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/javaScript/jQuery.js');
 
        // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        // wp_enqueue_script( 'comment-reply' );
        // }
       
    }

    add_action('wp_enqueue_scripts', 'theme_styles');

    //navigation
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu'),
    ));


    //Get top ancestor 
    function get_top_ancestor_id()
    {
        global $post;

        if($post->post_parent){
            $ancerstor = array_reverse(get_post_ancestors($post->ID));
            return $ancerstor[0];
        }
        return $post->ID;
    }


    //deas page has_children
    function has_children(){
        global $post;

        $pages = get_pages('child_of='. $post->ID);
        //this will evaluate in number if 0 it will be false
        return count($pages);
    }

    // customize excerpt word count length
    function custom_excerpt_length(){
        return 50;
    }
    add_filter('excerpt_length', 'custom_excerpt_length');

    //add support for featured
    function support_for_featured(){
        add_theme_support('post-thumbnails');
        //define thumnial sizes
        add_image_size('small-thumbnail',320,240,true);
        add_image_size('banner-image',760,auto,array('left', 'top'));
        add_image_size('x-small-thumbnail',340,auto,array('center'));
        add_image_size('xx-small-thumbnail',93,80);
    }

    add_action('after_setup_theme','support_for_featured');

?>