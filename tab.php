<?php

$tableau = [
    0 =>["Monroe","Marylin","45","Poitiers", "passions"=> ["chanter","musique"]],
    2 =>["Pitt","Brad","47","Rennes", "passions"=> ["Cinéma","vélo"]],
    3 =>["Staham","Jason","48","Aubervilliers", "passions"=> ["Paris","bagarre"]],
    4 =>["Van Dame","Jean-claude","52","Nîmes", "passions"=> ["grand ecart","la gym"]],
    5 =>["Stallone","Sylvester","53","Lille", "passions"=> ["boxe","guerre"]],
    6 =>["Lucas","Frank","68","Marseille", "passions"=> ["largent","famille"]],
    7 =>["Guzman","Joaquin","65","Lyon", "passions"=> ["guerre","arme"]],
    8 =>["Di Capprio","Léonard","51","Metz", "passions"=> ["film","amour"]],
    9 =>["Smith","Will","48","Toulouse", "passions"=> ["chien","travail"]],
    10 =>["Willis","Bruce","49","Toulon", "passions"=> ["voiture","moto"]],

];


function show_tableau($tableau){
    foreach ($tableau as $key => $val) {
        if (is_array($val)) {
            show_tableau($val);
        } else {
            echo $val . '</br>';
        }
    }
}

show_tableau($tableau);