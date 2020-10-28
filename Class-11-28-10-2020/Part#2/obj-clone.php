<?php
class Corporate_Drone {
    private $employeeid;
    private $tiecolor;
    // Define a setter and getter for $employeeid
    function setEmployeeID( $employeeid ) {
        $this->employeeid = $employeeid;
    }
    function getEmployeeID() {
        return $this->employeeid;
    }
    // Define a setter and getter for $tiecolor
    function setTieColor( $tiecolor ) {
        $this->tiecolor = $tiecolor;
    }
    function getTieColor() {
        return $this->tiecolor;
    }
}
// Create new Corporate_Drone object
$empOne = new Corporate_Drone();

// Set the $empOne employeeid property
$empOne->setEmployeeID( "12345" );

// Set the $empOne tiecolor property
$empOne->setTieColor( "red" );

// Clone the $empOne object
$drone2 = clone $empOne;

// // Set the $drone2 employeeid property
$drone2->setEmployeeID( "67890" );

// Output the $drone1 and $drone2 employeeid properties

printf( "empOne employeeID: %d <br />", $empOne->getEmployeeID() );
printf( "empOne tie color: %s <br />", $empOne->getTieColor() );
printf( "Drone2 employeeID: %d <br />", $drone2->getEmployeeID() );
printf( "Drone2 tie color: %s <br />", $drone2->getTieColor() );

?>
