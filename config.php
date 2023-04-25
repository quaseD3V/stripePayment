<?php
$user = 'dmvamghp_carlos';
$password = 'carlaoonumero1';
$database = 'dmvamghp_mail_list';
$hostname = 'localhost';

$mysqli =  new mysqli($hostname , $user, $password , $database );


/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

