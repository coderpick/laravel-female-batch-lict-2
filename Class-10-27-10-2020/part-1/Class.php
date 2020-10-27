<?php

class Person {

    public $name = ""; // propertiy
    public $age = ""; // propertiy

    // method
    public function setName( $name ) {
        $this->name = $name;
    }

    public function setAge( $age ) {
        $this->age = $age;
    }

    public function getInfo() {
        echo "My name is $this->name and age is $this->age year <br/>";
    }

}

$obj = new Person();

$obj->setName( 'Hafizur' );
$obj->setAge( 33 );
$obj->getInfo();

$person2 = new Person;
$person2->setName( 'Mustafizur' );
$person2->setAge( 25 );
$person2->getInfo();

?>