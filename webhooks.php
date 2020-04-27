<?php // callback.php

<?php
require "vendor/autoload.php";
$access_token = 'GuNN+eM0ofWFxHPXsa0JLxkM9n78AUghEzKUTu/qIg+JF1ko2ToXj9r3qduQTyZgMijCXmQtiwqMJC7Tj9wMNh/cJo3vUtYSy/JOP+2BKFaikSw2O1XPuRZ8HUBMy5XXd2biPGSe5FEU+5M3UrxMQgdB04t89/1O/w1cDnyilFU=';
$channelSecret = '8635a3c878452e4b79ea570dc7f5c841';
$idPush = 'U430914f7dc0dba430c455e27c985d9aa'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
