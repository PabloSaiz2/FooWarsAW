<?php
    if(!isValidSession()||!$_SESSION['login'])
        header('Location: ./login.php');
?>