<?php

namespace Erop\SpecificationInPhp\Working;

use Erop\SpecificationInPhp\Contracts\Candidate;

abstract class Cargo implements Candidate
{
    public function __construct(protected CargoType $cargoType, protected int $minTemp)
    {
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