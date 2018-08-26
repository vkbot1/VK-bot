<?php 
//versionAPI 5.80 по хорошему ребуеться возможность работы с разнымми версиями с этой целью класс и создавался  
abstract class VkModuleRequest{
	protected $parameters;
	public function __construct($data){
		$this->parseData($data);
	}

	abstract protected function parseData($data);
}