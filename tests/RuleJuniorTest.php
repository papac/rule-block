<?php

use RuleBlock\Stack\RuleJunior;

class RuleJuniorTest extends \PHPUnit\Framework\TestCase
{
    public function test_check_if_is_junior()
    {
        $rule = new RuleJunior();
        $this->assertTrue($rule->check(17));
        $this->assertFalse($rule->check(19));
    }
}