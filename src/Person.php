<?php
/**
 * Created by PhpStorm.
 * User: shiro
 * Date: 01.10.18
 * Time: 19:40
 */

class Person implements \JsonSerializable
{
    CONST MAX_POSSIBLE_AGE = 150;

    private static $maxAge = 0;

    private $firstName;
    private $lastName;
    private $age;

    public static function getOldest()
    {
        return self::$maxAge;
    }


    public function __construct($firstName, $lastName, $age = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function __toString()
    {
        return $this->firstName . " " . $this->lastName. \PHP_EOL;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getAge($age)
    {
        $this->age = $age;
        if($age > self::$maxAge){
            self::$maxAge = $age;
        }

        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        if($age > self::MAX_POSSIBLE_AGE){

            echo \sprintf('Imposible age %d', $age) . \PHP_EOL;
        }

    }

    public function jsonSerialize()
    {
      return [
          "firstName" => $this->firstName,
          "lastName" => $this->lastName,
          "age" => $this->age,
      ];
    }


}