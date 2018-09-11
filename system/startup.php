<?php	

//парс входящих данных
if(!SITE_MODE){
    if (!isset($_REQUEST)) {
      exit;
    }
    $vkRequest = json_decode(file_get_contents('php://input'),true);
}
else{
    $vkRequest = json_decode(VK_REQUEST,true);
    if(is_null($vkRequest))exit();
}
//D_write($vkRequest);

require_once("config.php");

/*
require_once("system/config.php");
require_once("config.php");

require_once("system/autoload.php");
*/

//router