<?php

namespace Erop\SpecificationInPhp\Contracts;

class OrSpecification extends CompositeSpecification
{
    public function isSatisfiedBy(Candidate $candidate): bool
    {
        return $this->left->isSatisfiedBy($candidate) || $this->right->isSatisfiedBy($candidate);
    }
}