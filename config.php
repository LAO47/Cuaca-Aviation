<?php


$databaseHost = 'localhost'; //localhost
$databaseName = 'aviationbmkg';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if ($mysqli->ping()) {
    //printf ("Our connection is ok!\n");
} else {
    //printf ("Error: %s\n", $mysqli->error);
}
?>