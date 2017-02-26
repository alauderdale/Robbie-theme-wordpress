<?php

//create post types


function create_my_post_types() {

    //add media
    $port_args = array(
      'public' => true,
      'label'  => 'Media',
      'taxonomies' => array('category'), 
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'media', $port_args );
    
}

add_action( 'init', 'create_my_post_types' );


