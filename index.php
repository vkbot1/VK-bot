<?php
define('DEBAG', true);
if (DEBAG){
    echo "deb<br>";
    define('VK_REQUEST', '
    
     {"type":"message_new","object":{"date":1533843824,"from_id":166109160,"id":4,"out":0,"peer_id":166109160,"text":"Филин, подтверди факт","conversation_message_id":4,"fwd_messages":[],"important":false,"random_id":0,"attachments":[],"is_hidden":false},"group_id":169785074,"secret":"jwbvhwhbvwiubvhwiuvbwiub4yy8ewgbf7evfiv4i7f"}
    ');
    function DEBAG_write($data)
    {

        echo "<pre>";
        print_r( $data);
        echo "</pre>";
    }
}

require_once("system/autoload.php");

//парс входящих данных
if (DEBAG){
    $dataEvent = new VkRequest(json_decode(VK_REQUEST, true));
    //DEBAG_write($dataEvent);
}
else{
    if (!isset($_REQUEST)) {
      exit;
    }
    $dataEvent = new VkRequest(json_decode(file_get_contents('php://input'), true));
}
$event = new Event($dataEvent);
$event->execute();

