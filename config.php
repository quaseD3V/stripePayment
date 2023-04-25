<?php
$user = 'your_user_db';
$password = 'your db_passwd';
$database = 'database here';
$hostname = 'localhost';

$mysqli =  new mysqli($hostname, $user, $password, $database);


/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
