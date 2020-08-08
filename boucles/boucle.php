<?php
/**
 * for
 * foreach
 * while
 * do while
 */

$age = 18;
for($i = 50;$i > $age;$i--){
    echo $i."\n";
}

while($age < 50){
    echo $age."\n";
    $age++;
}


do{
    echo $age."\n";
    $age++;
}while($age>50);