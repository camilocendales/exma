<?php 

function exma_menus() {

	$locations = array(
		'primary'  => __( 'Menu', 'exma' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'exma_menus' );

function create_post_type() {
    
    register_post_type( 'pillar',
        array(
            'labels' => array(
                'name' => __( 'Pillars' ),
                'singular_name' => __( 'pillar' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'pillar'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-layout',
            'taxonomies' => array( 'category' ),
            'supports' => array('title', 'editor','comments')
 
        )
    );

    register_post_type( 'speaker',
        array(
            'labels' => array(
                'name' => __( 'Speakers' ),
                'singular_name' => __( 'speaker' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'speaker'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-universal-access-alt',
            'taxonomies' => array( 'category' ),
            'supports' => array('title', 'editor','comments')
 
        )
    );

    register_post_type( 'Membresia',
        array(
            'labels' => array(
                'name' => __( 'Membresias' ),
                'singular_name' => __( 'membresia' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'membresia'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-tickets-alt',
            'taxonomies' => array( 'category' ),
            'supports' => array('title', 'editor','comments')
 
        )
    );

    register_post_type( 'Comunicado',
        array(
            'labels' => array(
                'name' => __( 'Comunicados' ),
                'singular_name' => __( 'comunicado' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'comunicado'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-megaphone',
            'taxonomies' => array( 'category' ),
            'supports' => array('title', 'editor','comments')
 
        )
    );
}

add_action( 'init', 'create_post_type' );
?>