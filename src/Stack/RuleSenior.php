<?php

namespace RuleBlock\Stack;

use RuleBlock\Contracts\RuleInterface;

class RuleSenior implements RuleInterface
{
    public function check(int $age): bool
    {
        return $age >= 50;
    }

    public function execute(): string
    {
        return "C'est un senior";
    }
}