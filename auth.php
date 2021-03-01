<?php
session_start();
if(isset($_SEESION['username'])){
    header("refresh:2 login.php");
}

?>