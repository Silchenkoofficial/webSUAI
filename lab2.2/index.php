<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Извещение о посылке</title>

    <link rel="stylesheet" href="main.css">
</head>

<body>

    <h1>Извещение о посылке</h1>

    <form action="notice.php" method="POST">
        <div class="creation">
            <label for='date-id'>Дата создания:</label>
            <!-- Решил использовать здесь атрибут min со значением date('Y-m-d'), чтобы нельзя было выбрать дату до сегодняшнего дня. -->
            <?php echo '<input type="date" name="date-field" min="' . date('Y-m-d') . '" id="date-id" />'; ?>
        </div>

        <fieldset>
            <legend>Персональная информация</legend>
            <div class="input__block">
                <label for="name-id">Введите имя:</label>
                <input type="text" name="name-field" id="name-id">
            </div>
            <div class="input__block">
                <label for="email-id">Введите E-mail:</label>
                <input type="email" name="email-field" id="email-id">
            </div>
            <div class="input__block">
                <label for="comments-id">Комментарий:</label>
                <br>
                <textarea name="comments-field" rows="5" id="comments-id"></textarea>
            </div>
        </fieldset>
        <fieldset>
            <legend>Дополнительная информация</legend>
            <div class="input__block">
                <label>Доставка:</label>
                <br>
                <label for="check1" style="text-transform: none;">
                    <input type="checkbox" name="deliveryType[]" id="check1" value="Курьер"> Курьер
                </label>
                <br>
                <label for="check2" style="text-transform: none;">
                    <input type="checkbox" name="deliveryType[]" id="check2" value="Самолет"> Самолет
                </label>
                <br>
                <label for="check3" style="text-transform: none;">
                    <input type="checkbox" name="deliveryType[]" id="check3" value="Поезд"> Поезд
                </label>
                <br>
                <label for="check4" style="text-transform: none;">
                    <input type="checkbox" name="deliveryType[]" id="check4" value="Автотранспорт"> Автотранспорт
                </label>
                <br>
            </div>
            <div class="input__block">
                <label>Форма посылки:</label>
                <br>
                <select name="deliveryForm">
                    <option disabled selected>Выберите форму...</option>
                    <option value="Круглая">Круглая</option>
                    <option value="Прямоугольная">Прямоугольная</option>
                </select>
            </div>
            <div class="input__block">
                <label>Цвет посылки:</label>
                <input type="color" name="deliveryColor">
            </div>
            <div class="input__block">
                <label>Количество:</label>
                <input type="number" name="deliveryCount">
            </div>
            <div class="input__wrapper">
                <div class="input__block">
                    <label>Тара:</label>
                    <br>
                    <select name="container[]" multiple>
                        <option value="Бьющаяся">Бьющаяся</option>
                        <option value="Хрупкая">Хрупкая</option>
                        <option value="Водопроницаемая">Водопроницаемая</option>
                        <option value="Пожароопасная">Пожароопасная</option>
                    </select>
                </div>
                <div class="input__block" style="margin-left: 50px;">
                    <label>Вес:</label>
                    <br>
                    <label for="radio1" style="text-transform: none;">
                        <input type="radio" name="deliveryWeight" id="radio1" value="< 50 кг" checked> До 50 кг </label>
                    <br>
                    <label for="radio2" style="text-transform: none;">
                        <input type="radio" name="deliveryWeight" id="radio2" value="> 50 кг"> Больше 50 кг </label>
                    <br>
                    </label>
                </div>
            </div>

            <input type="submit" value="Отправить" name="send-btn">
            <input type="reset" value="Очистка">
        </fieldset>

    </form>

</body>

</html>