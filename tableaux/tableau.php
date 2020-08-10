<?php

#$tableau = array();
$tableau = [
   "Admin" => "Ambroise",
    "Mod" => "boby",
    '755' => "jean",
    true => "Marion"
];

array_pop($tableau);
array_push($tableau,"Marion");
$tableau[] = "Marion";


foreach($tableau as $key => $value){
    echo "la clée est : ".$key ." et la valeur est : ".$value."\n";
}

print_r($tableau);


