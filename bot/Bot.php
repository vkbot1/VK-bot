<?php 

function bot_sendMessage(){
    $request_params = array(
	'user_id' => $data->object->from_id,
	'message' => 'ты пидор',
	'access_token' => $config['key'],
	'v' => '5.80'
    );
    file_get_contents('https://api.vk.com/method/messages.send?' . http_build_query($request_params));
}
class Bot{}

 ?>