<?php 

/**
 * if
 * elseif
 * else
 * switch
 * 
 */
$age = readline("Entrer votre age ");
$age = intval($age);

if($age <= 17){
    echo "vous n'avez pas l'autorisation";
}elseif($age >= 18){
    $nom = readline("Entrer votre nom ");
    if($nom){
        echo $nom." vous avez l'autorisation";
    }else{
        echo "Utilisateur inconnu";
    }
}else{
    echo "nous ne pouvons rien pour vous";
}

switch($age){
    case $age <= 17 :
        echo "vous n'avez pas l'autorisation";
    break;
    case $age >= 18 :
        echo "vous avez l'autorisation";
    break;

    default :
        //
}