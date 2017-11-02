<?php
namespace src;

class Trucks
{
    //This driver is Object from another Class "Drivers"
    private $driver;
    private $location;
    private $availability = true;


    /**
     * Change current location
     * @param $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Getting the last truck location
     * @return mixed
     */
    public function getTruckLocation()
    {
        return $this->location;
    }

    /**Set availability status
     * @param $availability
     */
    public function setAvailStatus($availability)
    {
        $this->availability = $availability;
    }

    /**
     * Check the track availability
     * @return bool
     */
    public function getAvailStatus()
    {
        return $this->availability;
    }

    /**
     * Notified who is Driver of this Truck
     * @param $driver
     */
    public function setDriver($driver)
    {
        $this->driver = $driver;
    }

    /**
     * Return drivers name
     * @return mixed
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * Trucks constructor.
     */
    public function __construct()
    {
        $this->setAvailStatus(false);
        $this->setLocation(11111);
    }

}

$truck = new Trucks();
//
echo 'The last truck location is ';
$truck->setLocation(123456);
echo $truck->getTruckLocation();
//
$truck->changeAvailStatus(true);
echo '<br>' . 'This truck is ' . (($truck->getAvailStatus() == true) ? 'Available' : 'NOT available');
echo '<br>' . 'driver = '. $this->driver;