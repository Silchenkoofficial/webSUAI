<?php
    $notice = array(
        "date"=>$_POST['date-field'],
        "name"=>$_POST['name-field'],
        "email"=>$_POST['email-field'],
        "deliveryType"=>$_POST['deliveryType'],
        "deliveryForm"=>$_POST['deliveryForm'],
        "deliveryCount"=>$_POST['deliveryCount'],
        "container"=>$_POST['container'],
        "deliveryColor"=>$_POST['deliveryColor'],
        "deliveryWeight"=>$_POST['deliveryWeight'],
        "comments"=>$_POST['comments-field']
    );
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Готовое извещение</title>
    <style>
        b {
            color: red;
        }
    </style>
</head>

<body>

    <form action="index.php">
        <div class="result__block">
            <p>Дата создания извещения: <b><?php echo $notice['date']; ?></b></p>
            <p>Здравствуйте, <b><?php echo $notice['name']; ?>!</b></p>
            <p>Ваш e-mail <b><?php echo $notice['email']; ?></b></p>
            <p>Ваша доставка:</p>
            <?php
            foreach ($notice['deliveryType'] as $type) {
                echo '<p><b>' . $type . '</b></p>';
            }
        ?>
            <p>Форма посылки:</p>
            <p><b><?php echo $notice['deliveryForm']; ?></b></p>
            <p>Количество: <b><?php echo $notice['deliveryCount']; ?></b></p>
            <p>Вес посылки: <b><?php echo $notice['deliveryWeight']; ?></b></p>
            <p>Цвет посылки:</p>
            <?php 
            echo '<div style="width: 50px; height: 50px; background-color: ' . $notice['deliveryColor'] . ';border-radius: 10px;"></div>';
            echo '<p style="color: ' . $notice['deliveryColor'] . ';">КОД ЦВЕТА=' . $notice['deliveryColor'] . '</p>';
        ?>
            <p>Была использована тара:</p>
            <?php
            foreach ($notice['container'] as $containerItem) {
                echo '<p><b>' . $containerItem . '</b></p>';
            }
        ?>
            <p>Комментарий: <b><?php echo $notice['comments'] ?></b></p>

        </div>

        <input type="submit" value="Создать новое извещение">
    </form>

</body>

</html>