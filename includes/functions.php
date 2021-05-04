<?php
    function createLogguedSession(){
        $_SESSION['login'] = true;
        $_SESSION['username'] = $_POST['user'];
    }
    function logout(){
        session_destroy();
    }
?>