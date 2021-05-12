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
        $count = 0;
        while ($i<10) {
            if(isset($_POST['field'.$i]))
                ++$count;
            ++$i;
        }
        return $count;
    }
    function getImgBlocks(){
        $i=0;
        $count = 0;
        while ($i<10) {
            if(isset($_FILES['img'.$i]))
                ++$count;
            ++$i;
        }
        return $count;
    }
?>