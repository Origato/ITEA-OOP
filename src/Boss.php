<?php
/**
 * Created by PhpStorm.
 * User: shiro
 * Date: 01.10.18
 * Time: 20:42
 */

class Boss
{
    private $employees = [];

    public function addEmplyee(EmployeeInterface $employee)
    {
        $this->$employees[] = $employee;
    }

    public function startWork()
    {
        foreach ($this->$employees as $employee) {
            $employee->work();
        }

        //TODO: delay befor pause login

        foreach ($this->employees as $employee) {
            if($employees instanceof EatInterface){
                $employees->eat();
            }
        }
    }

}