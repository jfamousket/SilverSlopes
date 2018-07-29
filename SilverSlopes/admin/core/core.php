<?php

session_start();

require 'db.php';

// echo $_SESSION['userId'];

if(!$_SESSION['adminId']) {
    header('location: index.php');
}



?>
