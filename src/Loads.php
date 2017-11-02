<?php

namespace src;


class Loads
{
    private $startLocation;
    private $finalLocation;
    private $freightCount;
    private $freightWeight;
    private $executor = null;
    private $status = available;

    /**
     * @param $startLocation
     * @param $finalLocation
     * @param $freightCount
     * @param $freightWeight
     */
    public function reChangeLoad($startLocation, $finalLocation, $freightWeight, $freightCount)
    {
        $this->startLocation = $startLocation;
        $this->finalLocation = $finalLocation;
        $this->freightWeight = $freightWeight;
        $this->freightCount = $freightCount;

    }

    /**
     * attach executor to load
     * @param $executor
     */
    public function setExecutor($executor)
    {
        if ($executor !== null) {
            $this->executor = $executor;
            $this->status = "booked";
        } else {
            $this->executor = null;
            $this->status = "available";
        }

    }

    /**
     * Loads constructor.
     * @param $startLocation
     * @param $finalLocation
     * @param $freightCount
     * @param $freightWeight
     */
    public function __construct($startLocation, $finalLocation, $freightWeight, $freightCount)
    {
        $this->startLocation = $startLocation;
        $this->finalLocation = $finalLocation;
        $this->freightWeight = $freightWeight;
        $this->freightCount = $freightCount;
    }
}