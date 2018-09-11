<?php 
function __autoload($class_name)
{
	$dirs = getDirs(DIR_SYSTEM);
	foreach ($dirs as $path) {
		$files = $path .DIRECTORY_SEPARATOR. lcfirst($class_name) . '.php';
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
