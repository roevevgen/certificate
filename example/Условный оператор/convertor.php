<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Конвертор</title>
</head>
<body>
<h1>Преобразование из дюймов в сантиметры</h1>
<form action="convertor.php" method="post">
    <label for="inches">Величина в дюймах:</label>
    <input type="text" name="inches" id="inches" size="10">
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
            $is = (string)$ins;
            if (str_contains($is, '.') || (strlen($is) > 1 && $is[-2] == '1'))

                $ins_ending = 'ов';
            else {
                $is = $is[-1];
                if ($is == 1)
                    $ins_ending = '';
                else if ($is >= 2 && $is <= 4)
                    $ins_ending = 'а';
                else
                    $ins_ending = 'ов';
            }
        }
        echo "<p>{$ins} дюйм{$ins_ending} = {$cents} сантиметров.</p>";
    } else {
        echo '<p>Величина в дюймах должна быть больше нуля.</p>';
    }

?>
</body>
</html>