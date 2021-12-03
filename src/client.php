<?php

use Erop\SpecificationInPhp\Working\CargoType;
use Erop\SpecificationInPhp\Working\FurnitureCargo;
use Erop\SpecificationInPhp\Working\LowTempSpecification;
use Erop\SpecificationInPhp\Working\MeatCargo;
use Erop\SpecificationInPhp\Working\MeatCargoSpecification;

require __DIR__ . '/../vendor/autoload.php';

$cargo1 = new MeatCargo(CargoType::Food, -10);
$cargo2 = new FurnitureCargo(CargoType::Furniture, 10);

$meatSpec = new MeatCargoSpecification();
$tempSpec = new LowTempSpecification();


$compositeSpec = $meatSpec->and($tempSpec);
echo (int)$compositeSpec->isSatisfiedBy($cargo1);
echo PHP_EOL;
echo (int)$compositeSpec->isSatisfiedBy($cargo2);
