<?php
/**
 * Created by PhpStorm.
 * User: shiro
 * Date: 01.10.18
 * Time: 20:33
 */

interface EmployeeInterface
{
    public function work();

    public function pause($minute);
}