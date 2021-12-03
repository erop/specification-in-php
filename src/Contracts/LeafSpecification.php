<?php

namespace Erop\SpecificationInPhp\Contracts;

abstract class LeafSpecification implements Specification
{
    public function __construct(protected Specification $specification)
    {
    }
}