<?php
    $request_path = trim($_GET['route'], '/');
    if ($request_path === '') {
        require $base_path . 'modules/list.php';
    } else {
        $index = (int)$request_path;
        require $base_path . 'modules/item.php';
    }
