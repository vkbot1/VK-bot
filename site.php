<?php	
define('SITE_MODE', true);

echo "<h1>SITE</h1><br>";
define('VK_REQUEST', '{"type":"message_new","object":{"date":1533843824,"from_id":166109160,"id":4,"out":0,"peer_id":166109160,"text":"Филин, подтверди факт","conversation_message_id":4,"fwd_messages":[],"important":false,"random_id":0,"attachments":[],"is_hidden":false},"group_id":169785074,"secret":"jwbvhwhbvwiubvhwiuvbwiub4yy8ewgbf7evfiv4i7f"}');


?>
<head><style type="text/css">body{background: linear-gradient(330deg, #31385a, #0d0421);padding: 0 20px;color: white;	font-weight: bold;font-size: 20px;}.debagDIV{padding: 10px 30px;margin: 2px 0 2px 50px;border-radius: 10px;display: table;color: black;font-size: 12px;}.D_write{background: radial-gradient(#e4deff,#cdcaff);border: solid 1px #9a9a9a;}</style></head>


 <?php
function D_write($data, $select = false)
{
    ?>
    <div class="D_write , debagDIV">
		<?php 
			echo "<pre>";
			$select ? var_dump($data): print_r( $data);
		    echo "</pre>";
		?>
	</div>

	<?php
    
}

require_once("index.php");