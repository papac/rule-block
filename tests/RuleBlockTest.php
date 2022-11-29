<?php

use RuleBlock\RuleBlock;

class RuleBlockTest extends \PHPUnit\Framework\TestCase
{
    public function test_run_rule_senior()
    {
        $ruleBlock = new RuleBlock();
        $result = $ruleBlock->evaluteRules(50);
        $this->assertEquals($result, "C'est un senior");
    }

    public function test_run_rule_junior()
    {
        $ruleBlock = new RuleBlock();
        $result = $ruleBlock->evaluteRules(17);
        $this->assertEquals($result, "C'est un junior");
    } 
}
