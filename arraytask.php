<?php

    $color = array('white', 'green', 'red', 'blue', 'black');
    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the ",$color[2]," carpet, the ",$color[1]," lawn, the ",$color[0]," house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
    echo"<br><br>";

    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

    foreach($ceu as $x => $x_values){
        echo "The capital of ",$x," is ",$x_values,"<br>";
    }
    $arr = ksort($ceu);
    echo"<br><br>";

    $arr1 = array("english"=>"35", "marathi"=>"15", "math"=>"43");
    asort($arr1);
    foreach($arr1 as $x => $x_values){
        echo $x,"=>",$x_values,"<br>";
    }
    echo"<br><br>";

    $arr = array("abcd","abc","de","hjjj","g","wer");
    $b=array();
    for($x=0;$x<6;$x++){
        array_push($b,strlen($arr[$x]));
    }
    echo "Min of array : ",min($b),"<br>";
    echo "Max of array : ",max($b),"<br>";
    echo"<br><br>";


   $arr = array( 'value1' => 3021, 'value2' => 2365, 'value3' => 5215, 'value4' => 5214, 'value5' => 2145);
    $b=array();
   foreach($arr as $x=>$x_values){
    array_push($b,$x_values);
   }
   $count = max($b);
   $ind = array_search($count,$arr);
   echo "Key of max value : ",$ind,"<br>";

   echo "Index of highest value is : ",array_search($count,$b);
   echo"<br><br>";


   $arr1 = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
   $arr2=array('c2', 'c4');

   for($x=0;$x<2;$x++){
    unset($arr1[$arr2[$x]]);
   }
   print_r($arr1);
   echo"<br><br>";


    $cars = array (
        array("marathi",22,50),
        array("english",15,50),
        array("hind",35,50),
        array("computer",47,50)
    );

   for($x=0;$x<4;$x++){
    echo $cars[$x][0]," has ",$cars[$x][1]," marks out of ",$cars[$x][2],"<br>";
   }

?>