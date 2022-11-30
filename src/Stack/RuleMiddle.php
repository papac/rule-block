<?php

namespace RuleBlock\Stack;

use RuleBlock\Contracts\RuleInterface;

class RuleMiddle implements RuleInterface
{
    public function check(int $age): bool
    {
        return $age > 18 && $age < 50;
    }

    public function execute(): string
    {
        return "C'est un cadre";
    }
}