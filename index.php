<?php

    include_once "Bicycle.php";
    include_once "Car.php";


    $bikeRed = new Bicycle("red",1,2);
    echo $bikeRed->forward() . "   Speed : " . $bikeRed->getCurrentSpeed() ."<br>";
    echo $bikeRed->brake() . "   Speed : " . $bikeRed->getCurrentSpeed()."<br>";

    $carRed = new Car("red",4,"diesel");

    echo $carRed->forward() . "   Speed : " . $carRed->getCurrentSpeed() . $carRed->getEnergy() ."<br>";
    echo $carRed->brake() . "   Speed : " . $carRed->getCurrentSpeed() . $carRed->getEnergy() ."<br>";
    echo $carRed->back() . "   Speed : " . $carRed->getCurrentSpeed() . $carRed->getEnergy() ."<br>";
    echo $carRed->forward() . "   Speed : " . $carRed->getCurrentSpeed() . $carRed->getEnergy() ."<br>";
    echo $carRed->brake() . "   Speed : " . $carRed->getCurrentSpeed() . $carRed->getEnergy() ."<br>";

?>