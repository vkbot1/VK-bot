<?php
define('PATH_CONFIG' , "config/config_VK_CALLBACK_API.php");
/**
 * 
 */
final class VkKey
{
	private $secretKey;
	private $groupId;
	private $confirmationKey;
	private $accessKey;

	function __construct()
	{

		if($this->includeConfig(PATH_CONFIG)){
			$this->initialization();
		}
		return;
	}
	private function includeConfig($path){
		if(is_file($path)){
			require_once ($path);
			return true;
		}
		return false;
	}
	private function initialization(){
		//try{
			if(VK_CALLBACK_API_SECRET_KEY)		{$this->secretKey = VK_CALLBACK_API_SECRET_KEY;}
			if(VK_CALLBACK_API_GROUP_ID)		{$this->groupId = VK_CALLBACK_API_GROUP_ID;}
			if(VK_CALLBACK_API_CONFIRMATION_KEY){$this->confirmationKey = VK_CALLBACK_API_CONFIRMATION_KEY;}
			if(VK_CALLBACK_API_ACCESS_KEY)		{$this->accessKey  = VK_CALLBACK_API_ACCESS_KEY;}
		//}
	}
	
	public function getSecretKey(){
		return $this->secretKey;
	}
	public function getGroupId(){
		return $this->groupId;
	}
	public function getConfirmationKey(){
		return $this->confirmationKey;
	}
	public function getAccessKey_KEY(){
		return $this->accessKey; 
	}
}