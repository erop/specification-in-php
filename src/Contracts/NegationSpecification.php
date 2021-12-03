<?php

namespace Erop\SpecificationInPhp\Contracts;

class NegationSpecification extends LeafSpecification
{
    public function isSatisfiedBy(Candidate $candidate): bool
    {
        return !$this->specification->isSatisfiedBy($candidate);
    }
}