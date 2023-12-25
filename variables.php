<?php
echo "Hello World !! <br>";
echo "Hello World !! <br>";

$name="Harsh";
$roll=12;
echo "<h2>Name is $name <br></h2>";
echo "Roll no. is $roll<br>";

// opertions
$x=10;$y=11;
echo "$x + $y = ",$x+$y,"<br>";

// functions
function mult(){
    global $x,$y,$z;
    $z=$x*$y;
    echo "$x * $y = ",$z,"<br>";
}
mult();

function name($fname){
    echo "Name is $fname<br>";
}
name("harsh");
name("uttu");

// data type
$a=2;$b="harsh";$c=1.2;
var_dump($a);echo "<br>";
var_dump($b);echo "<br>";
var_dump($c);echo "<br>";

// if...else
$t = date("A");
// echo $t;
if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!<br>";
}

// Short...if
$a = 5;
if ($a < 10) $b = "Hello<br>";
echo $b;

// Array
$car = array("Toyota","Kia","BMW","GTR");
echo count($car),"<br>";
echo $car[3],"<br>";
?>