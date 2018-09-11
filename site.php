<?php	
define('SITE_MODE', true);

echo "<h1>SITE</h1><br>";
define('VK_REQUEST', '{"type":"message_new","object":{"date":1533843824,"from_id":166109160,"id":4,"out":0,"peer_id":166109160,"text":"Филин, подтверди факт","conversation_message_id":4,"fwd_messages":[],"important":false,"random_id":0,"attachments":[],"is_hidden":false},"group_id":169785074,"secret":"jwbvhwhbvwiubvhwiuvbwiub4yy8ewgbf7evfiv4i7f"}');

function D_write($data)
{
    echo "<pre>";
    print_r( $data);
    echo "</pre>";
}

require_once("index.php");