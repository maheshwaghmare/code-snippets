<?php
$data = array( 'one' => 'One', 'two' => 'Two' );

nocache_headers();
header( 'Content-Type: application/json; charset=utf-8' );
header( 'Content-Disposition: attachment; filename=data-' . date( 'm-d-Y' ) . '.json' );
header( 'Expires: 0' );

echo json_encode( $data );
exit;