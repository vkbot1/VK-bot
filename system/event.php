<?php


class Event{
    var $parameters;
    
    public function __construct($parameters){
        //проверка секретного ключа
        if (Event::isSecret($parameters['secret'])){
            $this->parameters = $parameters;
        }
        else Event::callbackResponse('No access');
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
    }

    static function isSecret($data){
        if($data == VkKey::$SECRET ){
            return true;
        }
        return false;
    }

    private function callbackResponse($data) {
        echo $data;
        exit();
    }

    private function confirmation() {
        Event::callbackResponse(CALLBACK_API_CONFIRMATION_TOKEN);
    }

    private function messageNew($data) {
/*
        $bot = new Bot(NAME_BOT, $data);      
        $bot->execute();
        Event::callbackResponse('ok');*/
    }
}