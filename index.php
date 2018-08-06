<?php
define('DEBAG', 'true');
if (DEBAG){
define('VK_REQUEST', '

{"type":"message_new","object":{"id":155,"date":1533483430,"out":0,"user_id":166109160,"read_state":0,"title":"","body":"ff"},"group_id":168097314,"secret":"jrtior3gsgy5y64j46v66v4466yyhu57"}

');}

require_once("config.php");
require_once("bot/Bot.php");

if (!DEBAG){
    if (!isset($_REQUEST)) {
      exit;
    }
    $event = json_decode(file_get_contents('php://input'), true);
    if($event['secret'] != SECRET ){
        _callback_response('No access');
    }
}
else{
     $event = json_decode(VK_REQUEST, true);
}




switch ($event['type']) {
    //Подтверждение сервера
    case 'confirmation':
        _callback_handleConfirmation();
        break;
    //Получение нового сообщения
    case 'message_new':
        _callback_handleMessageNew($event['object']);
        break;
    default:
        _callback_response('Unsupported event');
        break;
}

function _callback_response($data) {
    echo $data;
    exit();
}

function _callback_handleConfirmation() {
  _callback_response(CALLBACK_API_CONFIRMATION_TOKEN);
}

function _callback_handleMessageNew($data) {
   /* $command = require_once ('comand.php');
    foreach ($this->routes as $uriPattern => $path){
	if (preg_match("~$uriPattern~", $uri)){
            $internalRoutre = preg_replace("~$uriPattern~", $path, $uri);
        }
    }/*
    bot_sendMessage();*/
    $bot = new Bot();
    
    _callback_response('ok');
}
