<?php
$getal1 = rand(1,1000);
$getal2 = rand(1,1000);
$a = 1;

settype($a, "string");

$a = $getal1>$getal2;
echo "<br> $getal1 > $getal2 = $a";
$a = $getal1<$getal2;
echo "<br> $getal1 < $getal2 = $a";
$a = $getal1==$getal2;
echo "<br> $getal1 == $getal2 = $a";
$a = $getal1===$getal2;
echo "<br> $getal1 === $getal2 = $a";
$a = $getal1>=$getal2;
echo "<br> $getal1 >= $getal2 = $a";
$a = $getal1<=$getal2;
echo "<br> $getal1 <= $getal2 = $a";
$a = $getal1!=$getal2;
echo "<br> $getal1 != $getal2 = $a";

?>