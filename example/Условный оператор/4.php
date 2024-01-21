<!--   Пользователь вводит свой возраст. Если он больше 80 лет, то вывести 'Здравствуйте, уважаемый', иначе 'Успехов!'.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Приветствие по возрасту</title>
</head>
<body>
<h2>Введите свой возраст:</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="number" name="age" required>
    <input type="submit" value="Показать приветствие">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получаем введенный возраст
        $age = $_POST["age"];

        // Проверяем условие
        if ($age > 80) {
            // Выводим приветствие для пользователей старше 80 лет
            echo "<p>Здравствуйте, уважаемый!</p>";
        } else {
            // Выводим общее приветствие для пользователей младше 80 лет
            echo "<p>Успехов!</p>";
        }
    }
?>
</body>
</html>
