<?php


namespace SOLID\OCP;


Abstract class Vehicle implements IVehicle
{

    private $color;
    private $maxSpeed;
    private $driver;
    private $routes = [];
    private $movable;


    /**
     * @return array
     */
    public function getRoutes()
    {
        return $this->routes;
    }

    /**
     * @param array $routes
     */
    public function addRoutes($routes)
    {
        $this->routes[] = $routes;
    }

    //getter
    public function getColor(){
        return $this->color;
    }

//setter
    public function setColor($color){
        $this->color = $color;
    }


//getter
    public function getMaxSpeed(){
        return $this->maxSpeed;
    }
//setter
    public function setMaxSpeed($maxSpeed){
        $this->maxSpeed = $maxSpeed ;
    }


    //getter

    /**
     * @return mixed
     */
    public function getDriver()
    {
        return $this->driver;
    }
//setter
    /**
     * @param mixed $driver
     */
    public function setDriver($driver)
    {
        $this->driver = $driver;
    }



    /**
     * @return mixed
     */
    public function getMovable ()
    {
        return $this -> movable;
    }

    /**
     * @param mixed $movable
     */
    public function setMovable ($movable)
    {
        $this -> movable = $movable;
    }



    public function move ()
    {
        return $this->getMovable ()->move();
    }

}