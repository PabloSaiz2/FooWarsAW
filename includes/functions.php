<?php
    function createLogguedSession($username){
        $_SESSION['login'] = true;
        $_SESSION['username'] =$username;
    }
    function logout(){
        session_destroy();
    }
?>