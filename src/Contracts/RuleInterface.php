<?php

namespace RuleBlock\Contracts;

interface RuleInterface
{
    public function check(int $age): bool;
    public function execute(): string;
}
