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
        <?
            $checkedWord = mb_strtolower($_POST['translate-input'],'UTF-8');
            if ($checkedWord != '') {
                if ($words[$checkedWord]) {
                    echo '<p style="margin: 10px 0;">Перевод: ' . $words[$checkedWord] . '</p>';
                } else {
                    echo '<p style="margin: 10px 0;">Упс... Я еще не знаю перевода этого слова:(</p>';
                }
            }
        ?>
    </fieldset>
</form>