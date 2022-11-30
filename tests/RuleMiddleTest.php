<?php

use RuleBlock\Stack\RuleMiddle;

class RuleMiddleTest extends \PHPUnit\Framework\TestCase
{
    public function test_check_if_is_middle()
    {
        $rule = new RuleMiddle();
        $this->assertTrue($rule->check(20));
        $this->assertFalse($rule->check(18));
    }
}