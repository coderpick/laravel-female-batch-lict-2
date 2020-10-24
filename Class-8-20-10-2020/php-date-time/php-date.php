<h2>PHP date time functions</h2>
<?php 
	
// date_default_timezone_set('Asia/Dhaka');
date_default_timezone_set('Asia/Qatar');
echo date_default_timezone_get();
echo "<hr/>";

	$x = date("M l,Y h:i:sA");
	echo $x;

 ?>
 <h2>php mktime</h2>
<?php
$d = mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
<h2>php strtotime() method</h2>
<?php
$d=strtotime("tomorrow");
echo date("d-l-F-Y h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>
<hr>
<?php
$startdate = strtotime("Saturday");
$enddate   = strtotime("+6 weeks",$startdate);
while ($startdate < $enddate) {
echo date("M d", $startdate),"<br>";
$startdate = strtotime("+1 week", $startdate);
}
?>
<hr>
<?php
$d1 = strtotime("December 03");
$d2 = ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 3rd of December.";
?>

<h2>php time() method</h2>

<?php
$time = time();
echo $time;
echo "<br/>";
echo date("F d, Y h:i:sA", $time);


?>