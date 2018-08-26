<?php
class Comand{
	protected 	$comand, // командa
				$method, //вызываемый обработчик	
				$description; //описание команды

	public function __construct($comand, $method, $description){
		$this->comand = $comand;
		$this->method = $method;
		$this->description = $description;
	}
	public function getComand(){	return $comand;	} 
	public function getMethod(){	return $method;	} 
	public function getDescription(){return $description;}
}