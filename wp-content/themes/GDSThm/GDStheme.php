<?php


// Thème Name: GABSVN Custom Post Types
// Thème URI: http://realise.com
// Description: GABSVN Thème Custom post type
// Version: 10.0
// Author: Gabriel_FDS
// Author URI:http://realise.com
// Textdomain: GABSVN
// License: GPLv2


add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
  
function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'GABSVN' ) );
    return $query;
}














?>

