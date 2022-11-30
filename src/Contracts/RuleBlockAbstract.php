<?php

namespace RuleBlock\Contracts;

abstract class RuleBlockAbstract
{
    protected array $rules = [];

    public function evaluteRules(int $age): string
    {
        $eligibleRule = null;
        foreach ($this->rules as $ruleClass) {
            $rule = new $ruleClass();
            if (!$rule->check($age)) {
                continue;
            }
            $eligibleRule = $rule;
            break;
        }

        if (!$eligibleRule) {
            throw new ErrorException("Il n'y a pas de régle éligible !");
        }

        return $eligibleRule->execute();
    }
}
