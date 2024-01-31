<?php
    $index = (int)$_GET['route'];
    if (isset($arr_images[$index])) {
        $item = $arr_images[$index];
    } else {
        // Обробка помилки, наприклад, перенаправлення на головну сторінку
        header('Location: /');
        exit;
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../styles.css" rel="stylesheet" type="text/css">
    <title><?php echo $item['desc'] ?> :: Фотогалерея</title>
</head>
<body>
<h1>Фотогалерея</h1>
<h2><?php echo $item['desc'] ?></h2>
<p><a href="/">На главную </a></p>
<section id="gallery-item">
    <img
            alt="<?php echo $item['desc'] ?>"
            src="../images/<?php echo $item['src'] ?>">
</section>
<p><a href="/">На главную </a></p>
</body>
</html>
