<h2>php data types</h2>
<h5>1. String data type</h5>
<?php
  $username= 'tonmoy46';
  //echo "User name is $username";
 var_dump($username);
?>
<h5>2. integer data type</h5>
<?php
  $price= -120;  
 var_dump($price);
?>
<h5>3. float data type</h5>
<?php
  $discount= 5.6;  
 var_dump($discount);
?>
<h5>4. Boolean data type</h5>
<?php
  $permission= false;  
 var_dump(is_bool($permission));
 echo "<br/>";
    $x = TRUE;
    $y = 9;
    var_dump(is_bool($x));// output bool(true)
    var_dump(is_bool($y));// output bool(false)
?>
<h5>5. Array data type</h5>
<?php
    // $colors = array('blue','green','orange','pink',12.5);
    $colors = ['blue','green','orange','pink',12.5];
   // print_r($colors);
   var_dump($colors);
?>
<h5>5. object data type</h5>
<?php
   class Employee{
       public $name ="Hafizur Rahman";
       public $age = 32;
   }
   $emp = new Employee();
   //echo $emp->name;
   //echo $emp->age;
   var_dump($emp);
?>
<h5>7. NULL data type</h5>
<?php
$a = NULL;
var_dump($a);
echo "<br>";
$b = "Hello World!";
$b = NULL;
var_dump($b);
?>
<h5>8. resource data type</h5>
<?php
  $handle =fopen('class-topic.txt','r');
  var_dump($handle);

?>

