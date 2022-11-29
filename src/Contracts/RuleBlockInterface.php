<?php

namespace RuleBlock\Contracts;

interface RuleBlockInterface
{
    public function evaluteRules(int $age): string;
}
