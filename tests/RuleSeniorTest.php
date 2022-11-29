<?php

use RuleBlock\Stack\RuleSenior;

class RuleSeniorTest extends \PHPUnit\Framework\TestCase
{
    public function test_check_if_is_senior()
    {
        $rule = new RuleSenior();

        $this->assertTrue($rule->check(50));
        $this->assertFalse($rule->check(20));
    }
}