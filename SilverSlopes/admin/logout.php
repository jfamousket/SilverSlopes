<?php 
require 'core/core.php';
//unset session
session_unset();
//destroy session
session_destroy();

header("location: index.php");

 ?>