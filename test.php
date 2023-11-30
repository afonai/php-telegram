<?php
require_once('vendor/autoload.php');

use afonai\telegram\Telegram;

$time = 1701349999;

/*$telegram = new Telegram('6434974241:AAExW6vyXr39ubBsJxIvS3MapVxy9wBIEHQ');
$telegram->sendMessage('1227307765', 'Привет мир!' . );*/
date_default_timezone_set('Pacific/Easter');

print_r(date('r', $time));
