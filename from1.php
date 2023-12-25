<?php 
echo "Welcome!!   ";
$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];
$gender = $_POST["gender"];

echo "<h2>",$name,"</h2><br>";
echo "Your Email is: <h4>",$email,"</h4><br>";
// echo "Gender: <h4>",$gender,"</h4><br>";
echo $comment,"<br>";

?>