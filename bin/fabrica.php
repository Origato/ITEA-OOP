#!/usr/bin/env php
<?php

require_once __DIR__ . "/../src/RobotEmployee.php";
require_once __DIR__ . "/../src/HumanEmployee.php";
require_once __DIR__ . "/../src/Boss.php";




$boss = new Boss();
$boss->addEmplyee(new HumanEmployee());
$boss->addEmplyee(new RobotEmployee());
$boss->addEmplyee(new HumanEmployee());
$boss->startWork();