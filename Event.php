<?php

require_once("config.php");
require_once("bot/Bot.php");

class Event{
    var $parameters;
    
    public function __construct($parameters){
        if (Event::isSecret($parameters['secret'])){
            $this->parameters = $parameters;
        }
        else Event::callbackResponse('No access');
    }

    public function run(){
        switch ($parameters['type']) {
            //Подтверждение сервера
            case 'confirmation':
                Event::callbackHandleConfirmation();
                break;
            //Получение нового сообщения
            case 'message_new':
                Event::callbackHandleMessageNew($parameters['object']);
                break;
            default:
                Event::callbackResponse('Unsupported event');
                break;
        }
    }

    static function isSecret($data){
        if($data == SECRET ){
            return true;
        }
        return false;
    }

    private function callbackResponse($data) {
        echo $data;
        exit();
    }

    private function callbackHandleConfirmation() {
      Event::callback_response(CALLBACK_API_CONFIRMATION_TOKEN);
    }

    private function callbackHandleMessageNew($data) {
       /* $command = require_once ('comand.php');
        foreach ($this->routes as $uriPattern => $path){
        if (preg_match("~$uriPattern~", $uri)){
                $internalRoutre = preg_replace("~$uriPattern~", $path, $uri);
            }
        }/*
        bot_sendMessage();*/
        $bot = new Bot();      
        Event::callback_response('ok');
    }
}