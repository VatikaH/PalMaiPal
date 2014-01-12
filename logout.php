<?php
session_start();
$_SESSION['id']=NULL;
session_unset();
session_destroy();
header("Location: ./login.html");
?>
