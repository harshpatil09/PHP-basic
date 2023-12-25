<?php

    echo str_word_count("Hello world! This is for test");
    echo "<br><br>";

    echo strlen("Hello ! This is for test");
    echo "<br><br>";

    echo strpos("When things go wrong, don't go with them.",'go wrong');
    echo "<br><br>";

    $str = "Life has got all those twists and turns";
    echo str_replace("twists","crumple",$str);
    echo "<br><br>";

    $a = "piece1, piece2 ,piece3, piece4, piece5 ,piece6";
    $b=explode(",",$a);
    print_r($b);
    // echo $b;
    echo "<br><br>";


    $str2 = "PHP scripts are executed on the server";
    echo substr($str2,16,22);
    echo "<br><br>";

    $a=strtoupper("php");
    echo strpos("PHP is free to download and use",$a);
?>