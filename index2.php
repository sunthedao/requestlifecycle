<?php

include './car.php' ;


$Fwheel = new Wheel("red","FirstWheel");
$Rwheel = new Wheel("Black","Rwheel");

$FRwheels = new Wheels([$Fwheel , $Rwheel]);

// const wheels = new Wheels([wheel1, wheel2])

$Fbike = new bike("Green",$FRwheels);
echo $Fbike->move();

$FRwheels->rotates();



$Fbike->Wheels->countWheels();
// echo "<br>";
// $Fbike->Wheels->countWheels();





