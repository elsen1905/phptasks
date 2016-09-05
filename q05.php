<?php
/*Asagidaki kodlar-ın outputu necə olacaq və nə üçün?*/

1-ci
$x = 5;
echo $x; //5
echo "<br />";
echo $x++ + $x++; //5 + 6 = 11
echo "<br />";
echo $x; //7
echo "<br />";
echo $x-- - $x--; //7 - 6 = 1
echo "<br />";
echo $x; //5

//2-ci
var_dump(0123 == 123); //false 16liq !=8lik
var_dump('0123' == 123);//true
var_dump('0123' === 123);//false

//3-cü
$x = true and false;
var_dump($x); //true

4-cü $x-in dəyəri nə olacaq?
$x = 3+"15%"+"$25";//18 reqemle basliyib diye %nezere almiyacaq axirincidada 0 goturecek
var_dump($x)

?>