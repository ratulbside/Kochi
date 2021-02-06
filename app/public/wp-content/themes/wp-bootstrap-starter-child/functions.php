<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'wp-bootstrap-starter-bootstrap-css','wp-bootstrap-starter-fontawesome-cdn' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

function wpb_add_style() {
    wp_enqueue_style( 'magnify-css', get_stylesheet_directory_uri() . '/css/magnific-popup.css', false );
} 
add_action( 'wp_enqueue_scripts', 'wpb_add_style' );

function my_scripts_method() {
    wp_enqueue_script('magnify-js', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.js', array( 'jquery' ));
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ));

     // Localize script
    wp_localize_script( 'custom-script', 'cm_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ));
    // Then enqueue script
    wp_enqueue_script( 'custom-script' );
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );


function load_ajax_content() {
    // You need to grab the data from $_POST variable
    // And must sanitize the data.
    $pid = intval($_POST['post_id']);
    $the_query  = new WP_Query(array(
        'p' => $pid
    ));

    if ($the_query->have_posts()) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            
            $title = get_the_title();
            $imageUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
            $pageUrl = get_field('page_url');
            $getPostLink = get_post_permalink();
            $conceptNote = get_field('concept_note');

            $data = $title."~".$getPostLink."~".$conceptNote."~".$imageUrl."~".$pageUrl;

        }
    }
    else {
        
        $data = '<div id="postdata">'.__('Didnt find anything', THEME_NAME).'</div>';
    }
    wp_reset_postdata();

    echo $data;
    die();
}

// The actual hook is wp_ajax_noprive_{$action} and wp_ajax_{$action}
// You action is my_load_ajax_content in JS. So your hook will be
add_action ( 'wp_ajax_nopriv_load_ajax_content', 'load_ajax_content' );
add_action ( 'wp_ajax_load_ajax_content', 'load_ajax_content' );