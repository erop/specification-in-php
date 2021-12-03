<?php

namespace Erop\SpecificationInPhp\Working;

class MeatCargo extends Cargo
{
    public function __construct(protected CargoType $cargoType = CargoType::Food, protected int $minTemp = -4)
    {
        parent::__construct($cargoType, $minTemp);
    }

    public function getCargoType(): CargoType
    {
        return $this->cargoType;
    }

    public function getMinTemp(): int
    {
        return $this->minTemp;
    }
}