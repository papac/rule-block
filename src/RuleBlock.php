<?php

namespace RuleBlock;

use ErrorException;
use RuleBlock\Stack\RuleJunior;
use RuleBlock\Stack\RuleMiddle;
use RuleBlock\Stack\RuleSenior;
use RuleBlock\Contracts\RuleBlockAbstract;

class RuleBlock extends RuleBlockAbstract
{
    protected array $rules = [
        RuleSenior::class,
        RuleJunior::class,
        RuleMiddle::class,
    ];
}
