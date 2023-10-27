<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="pervoe">
        <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        function validateForm($name, $email, $phone){
            // Проверка имени
            if (empty($name) || strlen($name) == 0) {
                return "Имя не может быть пустым.";
            }
            if (strlen($name) > 50) {
                return "Имя слишком длинное.";
            }
            if (strlen($name) < 2) {
                return "Имя слишком короткое.";
            }

            // Проверка email
            if (empty($email) || strlen($email) == 0) {
                return "Email не может быть пустым.";
            }
            if (strlen($email) > 100) {
                return "Email слишком длинный.";
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return "Неправильный формат почты.";
            }

            // Проверка номера телефона
            if (empty($phone) || strlen($phone) == 0) {
                return "Номер телефона не может быть пустым.";
            }
            if (strlen($phone) != 11) {
                return "Номер телефона должен содержать 11 цифр.";
            }

            // Если все проверки пройдены, возвращаем null
            return null;
        }
        ?>

    <div class="container">
        <div class="form_content">
            <form action="" method="POST" name="form" class="forma">
                <label for="">Имя</label>
                <input type="text" name="name" placeholder="Имя" value="<?php if(isset($name)) echo $name?>">
                <label for="">Почта</label>
                <input type="text" name="email" placeholder="Почта" value="<?php if(isset($email)) echo $email?>">
                <label for="">Номер телефона</label>
                <input type="number" name="phone" placeholder="Номер телефона" value="<?php if(isset($phone)) echo $phone?>">
                <input type="submit" name="form" class="btn" value="Кнопочка">
            </form>
        </div>
    </div>
    <?php
    $error = validateForm($name, $email, $phone);
        
        if ($error){
            echo $error;
        } else {
            echo "Форма прошла валидацию успешно!";
        }
    ?>
</div>
</body>
</html>