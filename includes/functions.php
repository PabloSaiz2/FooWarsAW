<?php
    function createLogguedSession($username){
        $_SESSION['login'] = true;
        $_SESSION['username'] =$username;
    }
    function logout(){
        session_destroy();
    }
    function getNumBlocks(){
        $i=0;
        while (isset($_POST['field'.$i])) {
            ++$i;
        }
        return $i;
    }
?>