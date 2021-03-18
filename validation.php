<?php
    function isValidSession(){
        return isset($_SESSION['login'])&&isset($_SESSION['username']);
    }
    function isValidLogin(){
        return isset($_POST['user'])&&isset($_POST['userpass']);
    }
?>