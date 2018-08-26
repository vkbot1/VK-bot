<?php 
//versionAPI 5.80 по хорошему ребуеться возможность работы с разнымми версиями с этой целью класс и создавался  
class VkRequest extends VkModuleRequest{
	protected function parseData($data){
		if($data['type']){$this->parameters['type'] = $data['type'];}

		if($data['object']){$this->parameters['object'] = new VkRequestObject($data['object']);}

		if($data['group_id']){$this->parameters['group_id'] = $data['group_id'];}

		if($data['secret']){$this->parameters['secret'] = $data['secret'];}
	}

	public function getType(){
		return $this->parameters['type'];
	}
	public function getObject(){
		return $this->parameters['object'];
	}
	public function getGroupId(){
		return $this->parameters['group_id'];
	}
	public function getSecret(){
		return $this->parameters['secret'];
	}
}
