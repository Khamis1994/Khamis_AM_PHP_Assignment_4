<!DOCTYPE html>
<html>
<head>
<style>
    table{border: 1px black solid;
    border-collapse: Collapse;
    width:40%;
    text-align:center;}
</style>
</head>
<body>
<?php
//Sum the Integer Between 0-30
$sum=0;
for ($x=0;$x<=30;$x++){
    $sum+=$x;
}
echo $sum."<br>";
//Print 
//*
//** 
//*** 
//**** 
//*****
$z="*"; 
for ($y=1;$y<=5;$y++){
    for ($q=1;$q<=$y;$q++){
        echo $z;
    }
    echo "<br>";
}

//factorial of a number for examble 4
$w=4;
$factorial=1;
for ($y=1;$y<=$w;$y++){
    $factorial*=$y;
    }
    echo $factorial."<br>";
   
//Multiplication Table
echo "<table border=solid >";
for ($e=1;$e<=6;$e++){
    echo "<tr>";
    for ($r=1;$r<=5;$r++){
        echo "<td>".$e."*".$r."=".$e*$r;
    }
    echo "<br>";
}
echo "</table>";

      ?>
    </body>
</html>
