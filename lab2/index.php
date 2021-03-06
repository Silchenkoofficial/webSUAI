<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №2</title>

    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>
    
<h1 style="margin: 10px 0;">Задание 1</h1>
<table class="table-task1">
    <tr>
        <!-- Работа с элементом SELECT и отправкой данных методом POST -->
        <form method="POST">
            <td class="task1-td" style="border-right: 1px solid #c9c9c9;">
                <h4 style="text-align:left;margin-bottom: 10px;">Работа с циклическими структурами</h4>
                <div class="select-block">
                    <select name="select-task1" id="">
                        <option selected disabled>Выберите действие...</option>
                        <option value="multiplication" name="multiplication">Таблица умножения</option>
                        <option value="counting" name="counting">Подсчет суммы нечетных чисел</option>
                        <option value="translate" name="translate">Переводчик</option>
                    </select>
                </div>
                <input type="submit" value="OK" name="send-btn">
            </td>
        </form>
        <!-- =============================================================== -->
        <!-- Работа с Radio кнопками, файлами и отправкой данных методом GET -->
        <form method="GET">
            <td class="task1-td">
                <h4 style="margin-bottom: 10px;">Работа с файлами</h4>
                <div class="radio-btn">
                    <input type="radio" value="newFile" name="files" id="fileCreation">
                    <label for="fileCreation">Создание файла</label>
                </div>
                <div class="radio-btn">
                    <input type="radio" value="addToFile" name="files" id="addToFile">
                    <label for="addToFile">Добавление в файл</label>
                </div>
                <div class="radio-btn">
                    <input type="radio" value="outputFromFile" name="files" id="outputFromFile">
                    <label for="outputFromFile">Вывод из файла</label>
                </div>
                <input type="submit" value="OK" name="radio-send-btn">
            </td>
        </form>
        <!-- =============================================================== -->
    </tr>
</table>
<?php
        $selectValue = $_POST["select-task1"];
        if (isset($_POST['send-btn'])) {
            switch ($selectValue) {
                case 'multiplication':
                    require_once './task1/multiplication.php';
                    break;
    
                case 'counting':
                    $count = 100;
                    require_once './task1/counting.php';
                    break;
    
                case 'translate':
                    require './task1/translate.php';
                    break;
            }
        } else if ($_POST['translate-btn']) {
            require './task1/translate.php';
        } else if ($_GET['radio-send-btn']) {
            require './task1.2/file.php';
        }
    ?>

</body>

</html>