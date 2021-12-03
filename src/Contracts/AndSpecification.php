<?php

namespace Erop\SpecificationInPhp\Contracts;

class AndSpecification implements Specification
{
    public function __construct(private Specification $left, private Specification $right)
    {
    }

    public function isSatisfiedBy(Candidate $candidate): bool
    {
        return $this->left->isSatisfiedBy($candidate) && $this->right->isSatisfiedBy($candidate);
    }
}