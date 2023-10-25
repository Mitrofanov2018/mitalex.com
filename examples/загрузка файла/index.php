<?php
    require_once "index.html";
    // if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])){
    //     echo $_POST['number1'] + $_POST['number2'];
    // }
    // else{
    //     echo $_POST['number1'] . $_POST['number2'];
    // }

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';


    echo $_FILES['file']['size'];
    echo $_FILES['file']['tmp_name'];
    if(move_uploaded_file($_FILES['file']['tmp_name'], 'temp/' . $_FILES['file']['name'])){
        echo 'Файл загружен';
    }
    else{
        echo 'Файл не загружен';
    }
?>