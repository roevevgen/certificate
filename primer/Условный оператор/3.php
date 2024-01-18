
<!--Пользователь вводит номер дня недели. Вывести название дня недели.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Определение дня недели</title>
</head>
<body>
    <h2>Введите номер дня недели:</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="number" name="dayNumber" min="1" max="7" required>
        <input type="submit" value="Показать день">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получаем введенное значение
        $dayNumber = $_POST["dayNumber"];

        // Проверяем, что введенное значение находится в диапазоне от 1 до 7
        if ($dayNumber >= 1 && $dayNumber <= 7) {
            // Массив с названиями дней недели
            $daysOfWeek = [
                1 => "Понедельник",
                2 => "Вторник",
                3 => "Среда",
                4 => "Четверг",
                5 => "Пятница",
                6 => "Суббота",
                7 => "Воскресенье"
            ];

            // Выводим название дня недели
            echo "<p>День недели: " . $daysOfWeek[$dayNumber] . "</p>";
        } else {
            // Выводим сообщение об ошибке, если введенное значение не в диапазоне от 1 до 7
            echo "<p>Ошибка: Введите номер дня от 1 до 7.</p>";
        }
    }
    ?>
</body>
</html>
