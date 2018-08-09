<?php
define('DEBAG', 'true');
if (DEBAG){
define('VK_REQUEST', '

{"type":"message_new","object":{"id":155,"date":1533483430,"out":0,"user_id":166109160,"read_state":0,"title":"","body":"ff"},"group_id":168097314,"secret":"jrtior3gsgy5y64j46v66v4466yyhu57"}

');}

require_once("Event.php");

if (!DEBAG){
    if (!isset($_REQUEST)) {
      exit;
    }
    $event = new Event(json_decode(file_get_contents('php://input'), true));
}
else{
    $event = new Event(json_decode(VK_REQUEST, true));
}

$event->run();

