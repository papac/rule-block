<?php

namespace RuleBlock\Stack;

use RuleBlock\Contracts\RuleInterface;

class RuleJunior implements RuleInterface
{
    public function check(int $age): bool
    {
        return $age <= 18;
    }

    public function execute(): string
    {
        return "C'est un junior";
    }
}