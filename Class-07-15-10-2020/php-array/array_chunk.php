<?php
$input_array = array( 'a', 'b', 'c', 'd', 'e' );
print_r( array_chunk( $input_array, 2 ) );
echo "<hr/>";
print_r( array_chunk( $input_array, 2, true ) );
?>