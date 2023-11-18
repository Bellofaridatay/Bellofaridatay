<?php


$l = 12;

$w = 5;

$a = 4;

$r = 6;

$pi = 3.142;

$areaofrec = $l * $w;
$permofrec = ($l + $w)*2;
$areaofsq = $a * $a;
$permofsq = 4 * $a;
$areaofcrcl = $pi * $r* $r;
$permofcrcl = 2 * $pi * $r;


print "The area of a rectangle is $areaofrec";
print "<br>The perimeter of rectangle is $permofrec";
echo 'The area of a square is ' . $areaofsq;
echo '<br>The perimeter of square is ' . $permofsq;
echo 'The area of a circle is ' . $areaofcrcl;
echo '<br>The perimeter of circle is ' . $permofcrcl;


?>