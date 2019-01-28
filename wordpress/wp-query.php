<?php
$query_args = array(
	'post_type'      => 'post',

	// Query performance optimization.
	'fields'         => 'ids',
	'no_found_rows'  => true,
	'posts_per_page' => -1,
);

$query = new WP_Query( $query_args );
if ( $query->posts ) {
	foreach ( $query->posts as $key => $post_id ) {
		// var_dump( $post_id );
	}
}