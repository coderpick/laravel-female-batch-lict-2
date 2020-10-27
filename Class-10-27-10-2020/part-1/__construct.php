<?php
class Employee{

 public $name;
 public $title;

 public function __construct($name,$title){

 $this->name = $name;
 $this->title = $title;
 }

 public function getInfo(){
 echo "Employee Name is : ".$this->name."<br/>"."Title : ". $this->title ."<br/>";
 }
 }
$productObject = new Employee("Tanvir", "Web developer");
$productObject->getInfo();
?>
<hr>
<?php

    class Book{
        public $name;
        function __construct($name)
        {
            echo $this->name=$name; 
        }
        // function BookInfo($name){
        //    echo $this->name=$name;
        // }
    }
    $bb = new Book('Physice book');
 
    //$bb->BookInfo('Math book');

?>