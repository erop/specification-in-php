<?php

namespace Erop\SpecificationInPhp\Working;

class FurnitureCargo extends Cargo
{
    public function __construct(protected CargoType $cargoType, protected int $lowTemp)
    {
        parent::__construct($cargoType, $lowTemp);
    }
}