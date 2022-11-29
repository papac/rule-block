<?php

namespace RuleBlock;

use ErrorException;
use RuleBlock\Stack\RuleJunior;
use RuleBlock\Stack\RuleSenior;
use RuleBlock\Contracts\RuleBlockInterface;

class RuleBlock implements RuleBlockInterface
{
    private array $rules = [
        RuleSenior::class,
        RuleJunior::class,
    ];

    public function evaluteRules(int $age): string
    {
        $eligibleRule = null;
        foreach ($this->rules as $ruleClass) {
            $rule = new $ruleClass();
            if ($rule->check($age)) {
                $eligibleRule = $rule;
                break;
            }
        }

        if (!$eligibleRule) {
            throw new ErrorException("Il n'y a pas de régle éligible !");
        }

        return $eligibleRule->execute();
    }
}
