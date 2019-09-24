<?php
namespace SOLID\SRP;



class Bus{
	
	private $busNumber;
	private $numberOfPassangers;
	private $color;
	private $maxSpeed;
	private $driver;
	private $doors;
    private $routes = [];

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

	public function __construct($color){

		 $this->setColor($color);
	}


//gettter 
	public function getBusNumber(){
		return $this->busNumber;
	}

	//setter
	public function setBusNumber($busNumber){
		$this->busNumber = $busNumber;
	}

//getter
	public function getNumberOfPassangers(){
		return $this->numberOfPassangers ;

	}

//setter
	public function setNumberOfPassangers($numberOfPassangers){
		 $this->numberOfPassangers = $numberOfPassangers;
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
	public function getDoors(){
		return $this->doors;

	}
//setter
	public function setDoors($door){
		 $this->doors = $door;

	}
//getter	



    /**
     * @return mixed
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * @param mixed $driver
     */
    public function setDriver($driver)
    {
        $this->driver = $driver;
    }


    public function move ()
    {
       foreach ($this->getRoutes () as $route){

    echo 'iam moving now from '. $route->getDestination() .' To ' . $route->getSource().' '
        . 'at max speed '. $this->getMaxSpeed () .' '." <br>";
       }
    }


}

