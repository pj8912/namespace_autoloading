<?php

require "src/CarIntro.php";
require "src/CarPrice.php";

use Test\Car\CarIntro as Intro;
use Test\Car\CarPrice as Price;

$intro = new Intro();
echo $intro->sayHello();
echo PHP_EOL;
$price = new Price();
echo $price->getQuote();

