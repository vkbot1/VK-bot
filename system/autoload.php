<?php 
	function __autoload($class_name)
	{
		$array_paths = array(
			'system/',
			'bot/',
			'VK_API/',
		);

		foreach ($array_paths as $path) {
			$_path = $path . strtolower($class_name) . '.php';
			/*if(DEBAG){
				DEBAG_write($class_name);
				DEBAG_write($path);
				DEBAG_write($_path);
				echo "<br>";
			}*/
			if(is_file($_path)){
				require_once $_path;
				return;
			}
		}
	}
