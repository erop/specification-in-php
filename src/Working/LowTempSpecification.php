<?php

namespace Erop\SpecificationInPhp\Working;

use Erop\SpecificationInPhp\Contracts\AbstractSpecification;
use Erop\SpecificationInPhp\Contracts\Candidate;

class LowTempSpecification extends AbstractSpecification
{
    public function isSatisfiedBy(Candidate $candidate): bool
    {
        /** @var Cargo $candidate */
        return $candidate->getMinTemp()<= 0;
    }
}