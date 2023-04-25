<?php

include('config.php');


$email = $_POST["email"];

if (empty($_POST['email'])) {
    print  "<script>" .  "alert('fill out the form!')"  . "</script>";
    print "<script>" . "window.location.href = 'https://www.thinrecords.com'" . "</script>";
} else {// to re update it in my data base i need change dmvamghp_mail_list to newsletter
    $mysqli->query("INSERT INTO newsletter (email) VALUES ('{$email}')"); 

    print "<script>" . "alert('Thanks for subscribe!')" . "</script>";
    print "<script>" . "window.location.href = 'https://www.thinrecords.com'" . "</script>";
}
