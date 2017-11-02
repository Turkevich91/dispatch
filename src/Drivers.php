<?php

namespace src;


class Drivers extends AbstractEmployees
{
    private $driversAvailability;
    private $ratePerMile;


    /**
     * Drivers constructor.
     * @param $name
     * @param $lastName
     * @param $salary
     */
    public function __construct($name, $lastName, $salary)
    {
        parent::__construct();
        $this->salary = 0;
        $this->ratePerMile = 0.5;  //Dollars per mile
        $this->driversAvailability = false;

    }

    /**
     * @param $driversAvailability
     */
    public function setDriversAvailability($driversAvailability)
    {
        $this->driversAvailability = $driversAvailability;
    }

    /**
     * add a fee for a trip to a monthly salary
     * @param $tripPayment
     */
    public function addFee($tripPayment)
    {
        $this->salary = $this->salary + $tripPayment;
    }
}