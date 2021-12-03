<?php

namespace Erop\SpecificationInPhp\Contracts;

interface Specification
{
    public function isSatisfiedBy(Candidate $candidate): bool;
}