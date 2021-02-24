<?php

    $words = array(
        'кошка' => "cat",
        "машина" => "car",
        "успех" => "success",
        "политика" => "politics",
        "выход" => "exit",
        "торговля" => "trade",
        "дерево" => "wood",
        "руководитель" => "the leader",
        "дружба" => "friendship",
        "армия" => "army",
        "нож" => "knife",
        "генерал" => "general"
    );

?>

<form method="post">
    <fieldset>
        <legend>Переводчик</legend>
        <label for="">
            Введите слово:
            <input type="text" name="translate-input">
        </label>

        <input type="submit" value="Перевести" name="translate-btn">
    </fieldset>
</form>