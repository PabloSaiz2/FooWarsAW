<?php
    function isValidSession(){
        return isset($_SESSION['login'])&&isset($_SESSION['username']);
    }
    function isValidLogin(){
        return isset($_POST['user'])&&isset($_POST['userpass']);
    }
    function isValidRegistro(){
        return isset($_POST['user'])&&isset($_POST['userpass']) &&isset($_POST['userpass2'])&&isset($_POST['name'])&&isset($_POST['lastname'])&&isset($_POST['email']);
    }
?>