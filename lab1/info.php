<?php

    $firstName = 'Никита';
    $lastName = 'Сильченко';
    $surname = 'Сергеевич';
    $bday = '25.09.1999';
    $from = 'Керчь';
    $height = 173;
    $weight = 69.1;
    $classification = '';
    $riskOfComorbidities = '';

    // Вычисление индекса массы тела по формуле: вес / рост(м) * рост(м)
    $indexMass = round($weight / pow($height / 100, 2), 1);

    // ================= Задание 2 =================
    // Вычисление классификации и риска сопутствующих заболеваний
    if ($indexMass < 18.5) {
        $classification = 'Дефицит массы тела';
        $riskOfComorbidities = 'Низкий (повышен риск других заболеваний)';
    }
    else if ($indexMass >= 18.5 & $indexMass < 24.9) {
        $classification = 'Нормальная масса тела';
        $riskOfComorbidities = 'Обычный';
    } 
    else if ($indexMass >= 25.0 & $indexMass < 29.9) {
        $classification = 'Избыточная масса тела (предожирение)';
        $riskOfComorbidities = 'Повышенный';
    }
    else if ($indexMass >= 30.0 & $indexMass < 34.9) {
        $classification = 'Ожирение I степени';
        $riskOfComorbidities = 'Высокий';
    }
    else if ($indexMass >= 35.0 & $indexMass < 39.9) {
        $classification = 'Ожирение II степени';
        $riskOfComorbidities = 'Очень высокий';
    }
    else if ($indexMass >= 40.0) {
        $classification = 'Ожирение III степени';
        $riskOfComorbidities = 'Чрезвычайно высокий';
    }
    // ================= /Задание 2 ================

    // ========== Задание 3 ========================
    $laptops2d=array( // Создание двумерного массива
        2=>array(
            "type"=>"Для учебы",
            "subtype"=>"Ноутбук на Intel",
            "name"=>"Acer M1",
            "quantity"=>10,
            "price"=>"19 000 ₽"
        ),
        3=>array(
            "type"=>"Для работы",
            "subtype"=>"Ноутбук на AMD",
            "name"=>"Samsung Note1",
            "quantity"=>5,
            "price"=>"50 000 ₽"
        ),
        4=>array(
            "type"=>"Для разработки",
            "subtype"=>"Ноутбук на AMD",
            "name"=>"Huawei P10 Pro",
            "quantity"=>60,
            "price"=>"27 000 ₽"
        ),
        5=>array(
            "type"=>"Для разработки",
            "subtype"=>"Ноутбук на Intel",
            "name"=>"Asus X550",
            "quantity"=>12,
            "price"=>"26 000 ₽"
        )
    );
    // ---------------------------------------------
    $laptops3d = array( // Создание двумерного массива
        "Ноутбуки на Intel"=>array(
            "Acer M1"=>array(
                "Тип"=>"Для учебы",
                "Количество на складе"=>10,
                "Цена"=>"19 000 ₽"
            ),
            "Asus X550"=>array(
                "Тип"=>"Для разработки",
                "Количество на складе"=>12,
                "Цена"=>"26 000 ₽"
            )
        ),
        "Ноутбуки на AMD"=>array(
            "Samsung Note1"=>array(
                "Тип"=>"Для работы",
                "Количество на складе"=>5,
                "Цена"=>"50 000 ₽"
            ),
            "Huawei P10 Pro"=>array(
                "Тип"=>"Для разработки",
                "Количество на складе"=>60,
                "Цена"=>"27 000 ₽"
            ),
            "Huawei P20 Pro"=>array(
                "Тип"=>"Для разработки",
                "Количество на складе"=>60,
                "Цена"=>"27 000 ₽"
            )
        )
    );
    // ========== /Задание 3 =======================


?>