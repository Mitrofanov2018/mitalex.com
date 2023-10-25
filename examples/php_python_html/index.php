<?php

require_once 'index.html';
// Проверяем, были ли отправлены данные из формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем значение поля "имя" из отправленных данных
    $firstName = $_POST["firstName"];

    // Получаем значение поля "фамилия" из отправленных данных
    $lastName = $_POST["lastName"];

    // // Выводим введенные данные
    // echo "Ваше имя: " . $firstName . "<br>";
    // echo "Ваша фамилия: " . $lastName . "<br>";
    
    $script = 'python main.py ' . '"' . $firstName . '"' . ' ' . '"' . $lastName . '"';
    // echo $script; 

    $handle = popen($script, 'r');

// Проверяем, удалось ли открыть поток
    if ($handle) {
        // Читаем вывод из потока
        $result = fread($handle, 1024);

        // Закрываем поток
        pclose($handle);

        // Выводим результат
        echo $result;
    } else {
        // Обработка ошибки открытия потока
        echo "Не удалось открыть поток.";
    }
    
}


?>

