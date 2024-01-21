<!--Пользователь выбирает из выпадающего списка страну (Турция, Египет или Италия), вводит количество дней для отдыха и указывает, есть ли у него скидка (чекбокс). Вывести стоимость отдыха, которая вычисляется как произведение количества дней на 400. Далее это число увеличивается на 10%, если выбран Египет,-->
<!--и на 12%, если выбрана Италия. И далее это число уменьшается на 5%, если указана скидка.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Расчет стоимости отдыха</title>
</head>
<body>
<h2>Рассчитайте стоимость отдыха</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="country">Выберите страну:</label>
    <select name="country" required>
        <option value="Турция">Турция</option>
        <option value="Египет">Египет</option>
        <option value="Италия">Италия</option>
    </select><br>

    <label for="days">Введите количество дней отдыха:</label>
    <input type="number" name="days" required><br>

    <label for="discount">Есть ли у вас скидка?</label>
    <input type="checkbox" name="discount"><br>

    <input type="submit" value="Рассчитать">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получаем введенные значения
        $country = $_POST["country"];
        $days = $_POST["days"];
        $discount = isset($_POST["discount"]);

        // Рассчитываем стоимость отдыха
        $cost = $days * 400;

        // Увеличиваем стоимость в зависимости от выбранной страны
        if ($country == "Египет") {
            $cost *= 1.10; // Увеличиваем на 10%
        } elseif ($country == "Италия") {
            $cost *= 1.12; // Увеличиваем на 12%
        }

        // Уменьшаем стоимость на 5%, если есть скидка
        if ($discount) {
            $cost *= 0.95; // Уменьшаем на 5%
        }

        // Выводим стоимость отдыха
        echo "<p>Стоимость отдыха: $cost</p>";
    }
?>
</body>
</html>
