<?php

class Event{
    protected $vkRequest;
    protected $vkKey;
    
    public function __construct($vkRequest){
        $this->vkKey = new VkKey();
        $this->setParameters($vkRequest);       
    }

    public function execute(){
        
        switch ($this->vkRequest->getType()) {
            //ВК подтвержддает сервер 
            case 'confirmation':
                Event::confirmation();
                break;
            //Получение нового сообщения
            case 'message_new':
                Event::messageNew($this->vkRequest->getObject());
                break;
            default:
                Event::callbackResponse('Unsupported event');
                break;
        }
        Event::callbackResponse('ok');
    }


    public function setParameters($vkRequest){
        //проверка секретного ключа
        if ($this->vkKey->isSecret($vkRequest->getSecret())){
            $this->vkRequest = $vkRequest;
        }
        else Event::callbackResponse('No access');
    }

    /*
    * ответ вк
    */
    protected function callbackResponse($data) {
        echo $data;
        exit();
    }

    protected function confirmation() {
        Event::callbackResponse($this->vkKey->getConfirmationKey());
    }

    protected function messageNew($data) {
/*
        $bot = new Bot(NAME_BOT, $data);      
        $bot->execute();*/
    }
}