<?php

$continents = array(
    "Asia"   => array( "Bangladesh", "India", "Pakistan" ),
    "Europe" => array( "England", "France" ),
    "Africa" => array( "Kenya", "Libya", "Somalia" ),

);
//print ($continents["Africa"][2]);
foreach ( $continents['Asia'] as $value ) {
    echo "$value" . "<br/>";
}
?>