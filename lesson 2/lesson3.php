<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашнее задание</title>
</head>
<body>

<?php
#константы
const NAME = 'Иван';
echo 'Меня зовут: '.NAME.'<br>';
echo gettype($NAME).'<br>';

const NAME = '1234';
echo 'Меня зовут: '.NAME.'<br>';
echo gettype($NAME).'<br>';
?>
</body>
</html>