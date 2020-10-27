<?php
class Employee {

    public $name;
    public $title;

    public function __construct( $name, $title ) {
        $this->name = $name;
        $this->title = $title;
    }

    public function getEmp() {
        echo "The employee name is $this->name & Degisnation is $this->title <br/>";
    }

    public function __destruct() {
        echo "work done";
    }
}

$empOne = new Employee( 'Hafizur', 'Web Developer' );
$empOne->getEmp();
?>
