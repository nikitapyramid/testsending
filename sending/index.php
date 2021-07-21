<?php
header('Content-Type: text/html; charset=utf-8');
// подрубаем API
require_once("vendor/autoload.php");


$text='Тут пишем текст вашего сообщения любой';   //// Тут пишем текст вашего сообщения


// создаем переменную бота
$token = "1784740іуа286:AAFBoshNgtboвпквкпNVjg-вкпyt9xCepsвкпpzgH8kSUPU";  //// токен бота
$grupa='@kremchikkremchik';  //// название паблика. В телеграме он выглядит так к примеру https://t.me/kremchikkremchik

$bot = new \TelegramBot\Api\Client($token,null);

$bot->sendMessage($grupa,$text);


$pic = "https://img.kremchik.ua/prd_pic/24/catlogo24.jpg"; /// Прямая ссылка на фото
$textfoto=" Тут текст фото ";   //// тут пишем текст фото

$bot->sendPhoto($grupa, $pic,$textfoto);


$bot->run();

echo "Выложили пост";