<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="pervoe">
        <h1>Задание 1</h1>
        <?php
        $students = ['Иванов', 'Пушкин', 'Сидоров', 'Борисов', 'Смирнов'];

        ?>

        <div class="spisok">
        <?php
        // Вывод списка студентов на экран
        foreach($students as $stud){
        echo '<div class="spisok_qwe">'.$stud.'</div>';
        }
        ?>
        </div>
        <div class="cont">
        <?php
        // Подсчет количества студентов
        $count = count($students);
        echo '<p class="pen">Количество студентов: <span>'. $count .'</span></p>';

        // Проверка наличия фамилии "Сидоров" в списке
        if (in_array('Сидоров', $students)) {
            echo '<p class="qw">Фамилия "Сидоров" есть в списке.</p>';
        } else {
            echo '<p>Фамилия "Сидоров" отсутствует в списке.</p>';
        }

        // Удаление последней фамилии из списка и сохранение в переменную $expelled
        $expelled = array_pop($students);
        echo '<p>Удаленная фамилия: <span>' . $expelled.'<span></p>';
        ?>
        </div>
    </div>

    <div class="vtoroe">
    <h1>Задание 2</h1>
        <div class="crug">
        <?php
        $circleStudents = [
            "Спортивный" => "Сидоров",
            "Художественный" => "Емелина",
            "Музыкальный" => "Иванова",
            "Литературный" => "Петров",
            "Биологический" => "Антонова"
        ];
        
        // Сортировка списка по фамилиям
        asort($circleStudents);
        
        // Вывод списка в формате "Кружок - Фамилия"
        foreach ($circleStudents as $circle => $student) {
            echo'<div class="circl_stud">'. $circle . " - " . $student . '</div>'. "\n";
        }
        ?>
        </div>
    </div>

<div class="tretie">
<h1>Задание 3</h1>
    <div class="form">
    <?php
                        $array3 = [
                            'name' => 'Камсков',
                            'firstname' => 'Егор',
                            'group' => '425 WEB',
                            'hobby' => 'car',
                            'network' => 'telegram',
                        ];

                        foreach ($array3 as $key => $value) {
                            echo $key . ' : ' . $value . '<br><br>';
                        }
    ?></div>
</div>
</body>
</html>