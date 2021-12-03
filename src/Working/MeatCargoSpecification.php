<?php

namespace Erop\SpecificationInPhp\Working;

use Erop\SpecificationInPhp\Contracts\AbstractSpecification;
use Erop\SpecificationInPhp\Contracts\Candidate;

class MeatCargoSpecification extends AbstractSpecification
{
    public function isSatisfiedBy(Candidate $candidate): bool
    {
        /** @var MeatCargo $candidate */
        return $candidate->getCargoType() === CargoType::Food;
    }
}