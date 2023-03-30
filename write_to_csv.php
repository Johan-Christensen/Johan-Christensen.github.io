<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");


$filename = 'barregninger.csv';
$row = $_POST['row'];

if (!file_exists($filename)) {
  $header = 'Dit tal,Antal genstande';
  file_put_contents($filename, $header . "\n");
}

file_put_contents($filename, $row . "\n", FILE_APPEND);

echo 'Data written to CSV file!';

?>
