<?php



function mafonction(int $age, ?string $nom):string
{
    global $nom;
    if(is_null($nom)){
        return  "Salut ";
    }else{
        return  "Salut ".$nom. " tu as ". $age ." ans";
    }

    echo "Je test";
    
}

$nom = "Jean";
$result = mafonction(45,"ambroise");

echo $result;