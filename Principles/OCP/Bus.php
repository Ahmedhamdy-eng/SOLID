<?php
namespace SOLID\OCP;



class Bus extends Vehicle {
	
	private $busNumber;
	private $numberOfPassangers;
	private $doors;


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




    public function getDoors(){
		return $this->doors;

	}
//setter
    public function setDoors($door){
		 $this->doors = $door;

	}




}

