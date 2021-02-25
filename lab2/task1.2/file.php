<?php

    switch ($_POST['files']) {
        case 'newFile':
            while (!$_POST['createFile']) {
                echo 'Имя файла: <input type="text" name="fileName" />';
                echo '<input type="submit" name="createFile" />';
                $fff = fopen($_POST['fileName'] . '.txt', "r");
                fwrite($fff, '');
                fclose($fff);
                break;
            }
        case 'addToFile':
            $fff = fopen("./1.txt", "w");
            for ($i=1; $i <= 10; $i++) { 
                $ppp = $i . " элемент\r\n";
                fwrite($fff, $ppp);
            }
            fclose($fff);
            break;
        case 'outputFromFile':
            break;
    }

?>