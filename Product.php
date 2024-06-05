<?php

class product
{
 public $name = "Product";
}

$Playstation5 = new product();
$Playstation5->name = "Playstation5";

$XboxSeriesX = new product();
$XboxSeriesX->name = "XboxSeriesX";

$NintendoSwitch = new product();

var_dump($Playstation5);
var_dump($XboxSeriesX);

echo $Playstation5->name . "<br>"	;
echo $XboxSeriesX->name . "<br>"	;
echo $NintendoSwitch->name . "<br>"	;