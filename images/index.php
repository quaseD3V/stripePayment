<?php
// do check
if (!isset($_SESSION["token"])) {
    header("location: error.php");
    exit; // prevent further execution, should there be more code that follows
}