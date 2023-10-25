<?php

    require_once 'index.html';

    $to = 'mitalex<mitrofan7879@gmail.com>';
    $subject = 'Test massage';

    $name = clean_data($_POST['name']);
    $email = clean_data($_POST['email']);
    $text = clean_data($_POST['text']);

    $message = 'Имя: ' . $name."\r\n"  . 'Email: ' . $email . "\r\n" . 'Текст: ' . $text . "\r\n";

    $headers = 'From: devlair1@mail.ru' . "\r\n";
    $headers .= 'Reply-To: devlair1@mail.ru' . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['text'])){
        mail($to, $subject, $message, $headers);
    }

    function clean_data($val){
        $val = trim($val);
        $val = stripslashes($val);
        $val = htmlspecialchars($val);
        return $val;
    }

    ?>
