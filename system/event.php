<?php

class Event{
    var $parameters;
    
    public function __construct($parameters){
        $this->setParameters($parameters);
    }

    public function execute(){
        
        switch ($this->parameters['type']) {
            //ВК подтвержддает сервер 
            case 'confirmation':
                Event::confirmation();
                break;
            //Получение нового сообщения
            case 'message_new':
                Event::messageNew($this->parameters['object']);
                break;
            default:
                Event::callbackResponse('Unsupported event');
                break;
        }
        Event::callbackResponse('ok');
    }

    static protected function isSecret($data){
        return $data == VK_CALLBACK_API_SECRET_KEY;
    }

    public function setParameters($parameters){
        //проверка секретного ключа
        if (Event::isSecret($parameters['secret'])){
            $this->parameters = $parameters;
        }
        else Event::callbackResponse('No access');
    }

    protected function callbackResponse($data) {
        echo $data;
        exit();
    }

    protected function confirmation() {
        Event::callbackResponse(VK_CALLBACK_API_CONFIRMATION_KEY);
    }

    protected function messageNew($data) {
/*
        $bot = new Bot(NAME_BOT, $data);      
        $bot->execute();*/
    }
}