<?php
    if(!empty($_POST))
    {
        echo 'login: ' . $_POST['login'];
        echo '<br>';
        echo 'password: ' . $_POST['password'];
        die();
    }
    require_once('index.html');
?>