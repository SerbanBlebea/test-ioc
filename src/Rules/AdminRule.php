<?php

namespace TestIoc\Rules;

use Framework\Interfaces\RouterRuleInterface;
use Framework\Injectables\Injector;
use Framework\RouterRules\Rule;

class AdminRule extends Rule implements RouterRuleInterface
{
    public function apply()
    {
        if(true)
        {
            return $this->next();
        }
        $this->fail();
    }

    public function fail()
    {
        dd("Rule Admin not passed");
    }
}
