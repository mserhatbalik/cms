<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cms";

foreach ($db as $key => $value) {
  // Constant tanımlıyoruz ve sonrasında connection parametresine bu key valueları gönderiyoruz uppercase yaparak.
  define(strtoupper($key), $value);
}


$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_set_charset($connection, 'UTF8');

if (!$connection) {
  echo "Error!";
}
