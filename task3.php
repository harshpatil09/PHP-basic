
<!DOCTYPE html>
    <body>
    <h3>Task 3.7</h3>
    <form method="post" action="task3.php" >
       <label>Enter no. between 1-7</label>
       <input type="text" name="weak">
       <br><input type="submit"> 
    </form>
    </body>
    </html>


<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$weak=$_POST["weak"];
$weaks=array(
    1=>"monday",
    2=>"Tuesday",
    3=>"Wednesday",
    4=>"Thursady",
    5=>"Friday",
    6=>"Saturday",
    7=>"Sunday"
);
if(empty($weak)){
    echo "Empty!!";
}
else{
    echo "<br>It's ",$weaks[$weak];
    echo "<br><br>";
}
}


echo "<h3>Task 3.3</h3>";

$a = array(10,20,30,40,50,60,70);
for($i=0;$i<6;$i++){
    $b=50;
    if($a[$i]==$b){
        echo "50 appered at index : ",$i+1,"<br><br>";
        break;
    }
}

echo "<h3>Task 3.4</h3>";
    $a = array(2,3,4,2,4,2);
    $b=0;
    for($i=0;$i<=5;$i++){
        if($a[$i]==2){
            $b++;
        }
    }
    echo "2 appered ",$b," times!<br><br>";


    echo "<h3>Task 3.5</h3>";

    $a=40;$b=30;$c=40;
    if($a==$b && $b==$c && $a==$c){
        echo "True";
    }
    else{
        echo "False<br>";
    }
    if($a==$b || $b==$c || $a==$c){
        echo "True";
    }
    else{
        echo "False<br>";
    }

    echo "<br><br>";

    echo "<h3>Task 3.6</h3>";
    $a=10;
    $b=20;
    echo "Conditional assignment: ",$a<$b ? $a : $b;
    echo "<br><br>";

    echo "<h3>Task 3.8</h3>";
    $a=array(1, 2, 3, 4);
    $b=array();
    echo "New array is: <br>";
    for($i=0;$i<=3;$i++){
        $b=$a[$i]*2;
        echo " ",$b," ";
    }
    echo "<br><br>";

    echo "<h3>Task 3.9</h3>";
    $a = array(
        "one" => 1,
        "two" => 2,
        "three" => 3,
        "seventeen" => 17
    );
    foreach($a as $x => $x_value){
        echo "Values : ",$x_value;
        echo"<br>";
    }
    echo "<br><br>";
?>