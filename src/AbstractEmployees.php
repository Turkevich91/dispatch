<?php

namespace src;


abstract class AbstractEmployees
{
    protected $name;
    protected $lastName;
    protected $salary;

    /**
     * AbstractEmployees constructor.
     * @param $name
     * @param $lastName
     * @param $salary
     */
    abstract function __construct($name, $lastName, $salary);

}