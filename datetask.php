<?php

    $d=mktime(0,0,0,10,17,2022);
    echo date("Y/m/d",$d),"<br>";

    $d2=mktime(0,0,0,10,17,22);
    echo date("Y.m.d",$d2),"<br>";
    echo date("d-m-Y",$d2),"<br>";

?>