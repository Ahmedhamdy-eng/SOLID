<?php


namespace SOLID\OCP;


class Trip
{
    private $Vehicle;
    private $tripNumber;
    private $tripPrice;
    private $duration;




    public function __construct ($Vehicle,$tripNumber,$tripPrice,$duration)
    {
        $this->setVehicle ($Vehicle);
        $this->setTripNumber ($tripNumber);
        $this->setTripPrice ($tripPrice);
        $this->setDuration ($duration);
    }

    /**
     * @return mixed
     */
    public function getVehicle ()
    {
        return $this -> Vehicle;
    }

    /**
     * @param mixed $bus
     */
    public function setVehicle ($Vehicle)
    {
        $this -> Vehicle = $Vehicle;
    }

    /**
     * @return mixed
     */
    public function getTripNumber ()
    {
        return $this -> tripNumber;
    }

    /**
     * @param mixed $tripNumber
     */
    public function setTripNumber ($tripNumber)
    {
        $this -> tripNumber = $tripNumber;
    }

    /**
     * @return mixed
     */
    public function getTripPrice ()
    {
        return $this -> tripPrice;
    }

    /**
     * @param mixed $tripPrice
     */
    public function setTripPrice ($tripPrice)
    {
        $this -> tripPrice = $tripPrice;
    }

    /**
     * @return mixed
     */
    public function getDuration ()
    {
        return $this -> duration;
    }
    /**
     * @param mixed $duration
     */
    public function setDuration ($duration)
    {
        $this -> duration = $duration;
    }


    public function move(){
        return $this->Vehicle->move();
    }
}