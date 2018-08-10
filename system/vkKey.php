<?php
/*
define('SECRET' , 'jwbvhwhbvwiubvhwiuvbwiub4yy8ewgbf7evfiv4i7f'); //секретный ключ 
define('GROUP_ID' , '169785074'); // id сообщества
define('CALLBACK_API_CONFIRMATION_TOKEN', '73a9fc61'); //Строка для подтверждения адреса сервера из настроек Callback API
define('VK_API_ACCESS_TOKEN', '616736bf24e507cba5b44a0cb5e41b775dbc854cacd53628612b8c7b07ecb1fd25a56492e1e18522690c7'); //Ключ доступа сообщества
*/
//define('NAME_BOT', "Филин");
abstract class VkKey{
	static final $SECRET; //секретный ключ 
	static final $GROUP_ID; // id сообщества
	static final $CALLBACK_API_CONFIRMATION_TOKEN; //Строка для подтверждения адреса сервера из настроек Callback API
	static final $VK_API_ACCESS_TOKEN; //Ключ 
}