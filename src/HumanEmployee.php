<?php
/**
 * Created by PhpStorm.
 * User: shiro
 * Date: 01.10.18
 * Time: 20:41
 */

require_once __DIR__ . "AbstractEmployee.php";

class HumanEmployee extends AbstractEmployee implements EatInterface
{
    const EATING_PAUSE_DURATION = 60;

    public function eat()
    {
        $this->pause(self::EATING_PAUSE_DURATION);
        echo \sprintf([%s] Eating.. \n)
    }

}