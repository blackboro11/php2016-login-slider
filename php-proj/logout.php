<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'BYE! THANK YOU FOR VIEWING!';
   header('Refresh: 2; URL = login.php');
?>