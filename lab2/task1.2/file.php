<?php
    $radioChecked = $_GET['files'];
    if ($radioChecked == 'newFile') {
        $fName = '1.txt';
        $fff = fopen($fName, "w");
        for ($i=1; $i <= 10; $i++) { 
            $ppp = $i . " строка;\r\n";
            fwrite($fff, $ppp);
        }
        fclose($fff);
        echo 'Файл создан!';
    } else if ($radioChecked == 'addToFile') {
        $fff = fopen('1.txt', "a");
        $string = 'Последняя строка!';
        fwrite($fff, $string);
        fclose($fff);
        echo 'Добавлена строка "Последняя строка!"';
    } else if ($radioChecked == 'outputFromFile') {
        $fff = file('1.txt');
        foreach ($fff as $string) {
            echo '<p>' . $string . '</p>';
        }
        fclose($fff);
    }
?>