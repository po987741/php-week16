<?php
session_start();
session_destroy();
session_unset();
header("refresh:2 ../login.php");
?>