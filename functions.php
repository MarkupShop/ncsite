<?php

add_theme_support( 'html5', array( 'search-form' ) );

/* ADD MENU SUPPORT */

register_nav_menu( 'main-menu', 'Menu of top-level pages for NCSITE' );




/* ADD CUSTOM POST TYPES */


function create_posttype_sponsors() {

    register_post_type( 'sponsors',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Sponsors' ),
                'singular_name' => __( 'Sponsor' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'sponsors'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_sponsors' );

function create_posttype_events() {

    register_post_type( 'events',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'Event' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'events'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_events' );


function remove_content_editor() {
    remove_post_type_support( 'page' , 'editor' );
    remove_post_type_support( 'sponsors' , 'editor' );
    remove_post_type_support( 'jobs', 'editor' );
    
}

add_action( 'init', 'remove_content_editor' );




/* CUSTOMIZING THE 'READ MORE' LINK REGARDING EXCERPTS */

function new_excerpt_more($more) {
       global $post;
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


/* Custom layout for children of awards */
function awardTemplateSelect() {

    $idObj = get_category_by_slug('awards'); 
    $id = $idObj->term_id;
    if (is_category() && !is_feed()) {
        if (cat_is_ancestor_of($id, get_query_var('cat'))) {
            load_template(TEMPLATEPATH . '/category-awards-children.php');
            exit;
        }
    }
}

add_action('template_redirect', 'awardTemplateSelect');

function resourcesTemplateSelect() {

    $idObj = get_category_by_slug('awards'); 
    $id = $idObj->term_id;
    if (is_category() && !is_feed()) {
        if (cat_is_ancestor_of($id, get_query_var('cat'))) {
            load_template(TEMPLATEPATH . '/category-resources-children.php');
            exit;
        }
    }
}

add_action('template_redirect', 'resourcesTemplateSelect');

?>