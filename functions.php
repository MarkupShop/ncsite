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

function create_posttype_jobs() {

    register_post_type( 'jobs',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Job Postings' ),
                'singular_name' => __( 'Job Posting' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'jobs'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_jobs' );


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

/* Adding custom posts to wp query object */
function my_always_get_post_custom( $posts ) {

    for ( $i = 0; $i < count($posts); $i++ ) {

        $custom_fields = get_post_custom( $posts[$i]->ID );
        $posts[$i]->custom_fields = $custom_fields;

    }

    return $posts;

}

add_filter( 'the_posts', 'my_always_get_post_custom' );

?>