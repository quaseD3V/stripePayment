<?php
$user = 'user';
$password = 'passwd';
$database = 'database';
$hostname = 'localhost';

$mysqli =  new mysqli($hostname, $user, $password, $database);


/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
