<?php 
function __autoload($class_name)
{
	$dirs = getDirs(".");
	foreach ($dirs as $path) {
		$files = $path .DIRECTORY_SEPARATOR. lcfirst($class_name) . '.php';
		if(DEBAG){
			DEBAG_write($class_name);
			DEBAG_write($path);
			DEBAG_write($files);
			echo "<br>";
		}
		if(is_file($files)){
			require_once $files;
			return;
		}
	}
}

function getDirs($dir, &$results = array()){
    $files = scandir($dir);

    foreach($files as $key => $value){
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
        if(is_dir($path)) {
            if($value != "." && $value != "..") {
                getDirs($path, $results);
                $results[] = $path;
            }
        }
    }
    return $results;
}
