<?php
     require_once 'login.php';
     session_start();
     //$name = $_POST["name"];
    // $pass = $_POST["pass"];

     $login = new Login();
     $_SESSION['loggedin'] = true;

     echo $login->doLogin('kobe', '123');
?>
