<?php

namespace Erop\SpecificationInPhp\Contracts;

abstract class CompositeSpecification implements Specification
{
    public function __construct(protected Specification $left, protected Specification $right)
    {
    }
}