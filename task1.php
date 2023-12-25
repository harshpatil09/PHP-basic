<?php

    // Array 
    
    $city = array("Kolhapur"," New York", "Pune", "Mumbai", "Tokyo");
    $students = array(
        array("Harsh",21,"CSE","22/09/2003"),
        array("Atharva",21,"Civil","22/09/2003"),
        array("Jaydeep",22,"Mech","22/09/2003"),
        array("Utkarsh",23,"Arch","22/09/2003"),
        array("Siddhesh",24,"Elect","22/09/2003"),
    );
    
    for($i=0;$i<=4;$i++){
        if($city[$i]==" New York"){
            echo "New York is at ",$i+1,"<br><br>";
        }  
    }
    for($i=0;$i<=4;$i++){
        if($city[$i]=="Tokyo"){
            echo "Tokyo is at ",$i+1,"<br><br>";
        }  
    }

  

    echo  "Name is ",$students[0][0],"<br>DOB is ",$students[0][3],"<br>Age is ",$students[0][1],"<br><br>";
    echo  "Name is ",$students[1][0],"<br>DOB is ",$students[1][3],"<br>Age is ",$students[1][1],"<br><br>";
    echo  "Name is ",$students[2][0],"<br>DOB is ",$students[2][3],"<br>Age is ",$students[2][1],"<br><br>";
    echo  "Name is ",$students[3][0],"<br>DOB is ",$students[3][3],"<br>Age is ",$students[3][1],"<br><br><br>";

    echo "<h3>Task 2</h3>";
    $a=44;$b=67;

    // if($a%2 == 0){
    //     echo $a," % 2 == 0 is True<br>";
    // }
    // else{
    //     echo $a," % 2 == 0 is False<br>";
    // }
    // if($b%2 == 0){
    //     echo $b," % 2 == 0 is True<br>";
    // }
    // else{
    //     echo $b," % 2 == 0 is False<br>";
    // }

    function mod($x,$y){
        // if($x%2 == 0){
        //     echo $x," % 2 == 0 is True<br>";
        // }
        // else{
        //     echo $x," % 2 == 0 is False<br>";
        // }

        if($x%$y == 0){
            echo $x," % ",$y," == 0 is True<br>";
        }
        else{
            echo $x," % ",$y," == 0 is False<br>";
        }
    }
    mod($a,$b);
    


    echo "<h3>Task 3</h3>";
    $a=30;$b=40;

    function operation($x,$y){
        echo $x," + ",$y," = ",$x+$y,"<br>";
        echo $x," - ",$y," = ",$x-$y,"<br>";
        echo $x," / ",$y," = ",$x/$y,"<br>";
        echo $x," * ",$y," = ",$x*$y,"<br>";
        echo $x," ** ",$y," = ",$x**$y,"<br>";
        echo $x," % ",$y," = ",$x%$y,"<br><br><br>";

    }
    operation($a,$b);
    
    // Greatest of 3
    $a=10;$b=60;$c=5;

    function greatest($x,$y,$z){
        if($x>$y && $x>$z){
            echo $x," is greatest.<br>";
        }
        elseif($y>$z){
            echo $y," is greatest.<br>";
        }
        else{
            echo $z," is greatest.<br>";
        }
    }
    function lowest($x,$y,$z){
        if($x<$y && $x<$z){
            echo $x," is lowest.<br><br>";
        }
        elseif($y<$z){
            echo $y," is lowest.<br><br>";
        }
        else{
            echo $z," is lowest.<br><br>";
        }
    }
    greatest($a,$b,$c);
    lowest($a,$b,$c);


?>