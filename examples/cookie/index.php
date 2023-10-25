<?php
    setcookie('test', plus());
    function plus(){
        if (isset($_COOKIE['test'])){
            $_COOKIE['test'] = $_COOKIE['test'] + 1;
        }else{
            $_COOKIE['test'] = 1;
        }
        return $_COOKIE['test'];
    }
    echo $_COOKIE['test'];
?>
