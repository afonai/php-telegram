<?php
require_once('vendor/autoload.php');

use afonai\telegram\Telegram;

$telegram = new Telegram('6434974241:AAExW6vyXr39ubBsJxIvS3MapVxy9wBIEHQ');
$telegram->sendMessage('1227307765', 'Привет мир!' . strtotime("+1 day"), [
    [
        [
            'text' => date('c', time()+14400),
            'url' => 'https://www.php.net/manual/ru/function.json-encode.php',
        ],
    ],
    [
        [
            'text' => date('Y-m-d в H:i:s', strtotime("next Monday")),
            'url' => 'https://www.php.net/manual/ru/function.json-encode.php',
        ],
    ]
]);

print_r($telegram);
