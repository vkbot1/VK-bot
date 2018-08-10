<?php
require_once("class/Comand.php");

return array(
    new Comand(
    	array(
    		'подтерди'
    	),
    	'confirm',
    	'Подтверждаю что либо фразой "угу"'
    ),
    new Comand(
	    array(
	    	'помощь',
	    	'что умеешь',
	    	'что можешь',
	    	'help'
	    ),
	    'help',
	    'Возвращаю список команд'
	),
    /*
    new Comand(
	    array(
	    	'',
	    ),
	    '',
	    ''
	),
	*/
);