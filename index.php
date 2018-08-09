<?php
define('DEBAG', false);
if (DEBAG){
    echo "deb<br>";
    define('VK_REQUEST', '

    {"type":"confirmation","group_id":169785074,"secret":"jwbvhwhbvwiubvhwiuvbwiub4yy8ewgbf7evfiv4i7f"}

    ');
    function DEBAG_write($data)
    {
        echo "<pre>";
        print_r( $data);
        echo "</pre";
    }
}

require_once("Event.php");

if (DEBAG){
    $dataEvent = json_decode(VK_REQUEST, true);
}
else{
    if (!isset($_REQUEST)) {
      exit;
    }
    $dataEvent = json_decode(file_get_contents('php://input'), true);
}
$event = new Event($dataEvent);
$event->run();

