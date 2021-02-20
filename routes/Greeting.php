<?php

use Illuminate\Support\Facades\Route;
$text = 'Первый сайт на Laravel';
$title = 'Приветствуя Вас на моей странице!';

Route::get('/', function () use ($text, $title){
    return <<<php
<!doctype   html>
<html lang="en">
<head>
    <meta charset='UTF-8'>
    <title>$title</title>
</head>
<body>
    <h1>$text</h1>
    Моя первая страница на Laravel
</body>
</html>
php;
});
