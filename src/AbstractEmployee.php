<?php
/**
 * Created by PhpStorm.
 * User: shiro
 * Date: 01.10.18
 * Time: 20:36
 */

abstract class AbstractEmployee implements EmployeeInterface
{
    public function work()
    {
        echo sprintf("[%s] Working... \n", \spl_object_id($this));
    }

    public function pause($minute)
    {
        echo \sprintf("[%s] Pause work for %d minutes.\n", $minute);
    }



}