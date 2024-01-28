<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Конвертор</title>
</head>
<body>
<h1>Преобразование из дюймов в сантиметры</h1>
<form action="convertor.php" method="post">
    <p>Величина в дюймах:
        <input type="text" name="inches" size="10"></p>
    <p><input type="submit" value="Преобразовать"></p>
</form>
<?php
    if (isset($_POST['inches'])) {

        // Заменяем точку на запятую

        $ins = str_replace(".", ",", $_POST['inches']);

        // Преобразуем строку в число

        $ins = (double)$ins;
        if ($ins > 0) {
            $cents = round($ins * 2.54);
            echo '<p>', $ins, ' дюймов = ', $cents, ' сантиметров.</p>';
        } else {
            echo 'Вепичина в дюймах должна быть больше нуля. ';
        }


    }

?>
</body>
</html>