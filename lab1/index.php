<?php require "info.php"; // Подключение файла info.php ?>

<!DOCTYPE html>
<html>
<head>
    <title>Лабораторная работа №1</title>
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
    <h1>Лабораторная работа №1</h1>
    <h2>Задание 1</h2>
    <table border=3>
        <tr>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Дата рождения</th>
            <th>Место рождения</th>
        </tr>
        <tr>
            <td><?php echo $firstName; ?></td>
            <td><?php echo $lastName; ?></td>
            <td><?php echo $surname; ?></td>
            <td><?php echo $bday; ?></td>
            <td><?php echo $from; ?></td>
        </tr>
        <tr>
            <th colspan=5>Дополнительная информация</th>
        </tr>
        <tr>
            <td rowspan=2>
                <img src="./assets/images/avatar.jpg" alt="avatar">
            </td>
            <td colspan=2 style="text-transform:uppercase;">Рост</td>
            <td colspan=2><?php echo $height; ?></td>
        </tr>
        <tr>
            <td colspan=2 style="text-transform:uppercase;">Вес</td>
            <td colspan=2><?php echo $weight; ?></td>
        </tr>
    </table>
    <h2>Задание 2</h2>
    <table border=3>
        <tr>
            <th>Индекс массы тела</th>
            <th>Классификация</th>
            <th>Риск сопутствующих заболеваний</th>
        </tr>
        <tr>
            <td><?php echo $indexMass; ?></td>
            <td><?php echo $classification; ?></td>
            <td><?php echo $riskOfComorbidities; ?></td>
        </tr>
    </table>
    <h2>Задание 3</h2>
    <table border=3>
        <tr>
            <th>Код ноутбука</th>
            <th>Тип</th>
            <th>Подтип</th>
            <th>Название ноутбука</th>
            <th>Количество ноутбуков на складе</th>
            <th>Цена ноутбука</th>
        </tr>
        <tr>
            <?php
                // Вывод двумерного массива
                foreach($laptops2d as $laptopCode => $laptop) {
                    echo '
                        <tr>
                            <td>' . $laptopCode . '</td>
                    ';
                    foreach ($laptop as $key => $value) {
                        echo '<td>' . $value . '</td>';
                    }
                    echo '</tr>';
                }
            ?>
        </tr>
    </table>
    <p>Таблица 1. Двумерный массив</p>

    <table border=3>
        <tr>
                <?php
                    // Вывод трехмерного массива
                    foreach ($laptops3d as $key => $value) {
                        echo '<th colspan=' . count($value) * 3 . '>' . $key . '</th>';
                    }
                ?>
                <tr>
                    <?php
                        foreach ($laptops3d as $laptopSubtypeKey => $laptopSubtype) {
                            foreach ($laptopSubtype as $laptopNameKey => $laptopName) {
                                echo '<td colspan=3>' . $laptopNameKey . '</td>';
                            }
                        }
                    ?>
                </tr>
                <tr>
                    <?php
                        foreach ($laptops3d as $laptopSubtypeKey => $laptopSubtype) {
                            foreach ($laptopSubtype as $laptopNameKey => $laptopName) {
                                foreach ($laptopName as $laptopPropsKey => $laptopProps) {
                                    echo '<td><b>' . $laptopPropsKey . ': </b>' . $laptopProps . '</td>';
                                }
                            }
                        }
                    ?>
                </tr>
        </tr>
    </table>
    <p>Таблица 2. Трехмерный массив</p>

</body>
</html>