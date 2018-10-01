#!/usr/bin/env php
<?php

require_once __DIR__ . "/../src/Person.php";

echo Person::getOldest() . \PHP_EOL;


$p1 = new Person("Petr", "Ivanov", 151);
$p2 = new Person("Anna", "Petrova", 26);
$p3 = new Person("Kolya","Ivanov");
$p3->setAge(151);


echo $p1->getFirstName() .\PHP_EOL;
echo $p2->getLastName() .\PHP_EOL;
echo $p3->getAge(200) .\PHP_EOL;

echo Person::getOldest() . \PHP_EOL;

echo $p1;

var_dump(json_encode($p1));