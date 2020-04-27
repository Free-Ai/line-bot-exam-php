<?php


$access_token = 'GuNN+eM0ofWFxHPXsa0JLxkM9n78AUghEzKUTu/qIg+JF1ko2ToXj9r3qduQTyZgMijCXmQtiwqMJC7Tj9wMNh/cJo3vUtYSy/JOP+2BKFaikSw2O1XPuRZ8HUBMy5XXd2biPGSe5FEU+5M3UrxMQgdB04t89/1O/w1cDnyilFU=';

$userId = 'U430914f7dc0dba430c455e27c985d9aa';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

