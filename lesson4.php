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
#условный оператор

$age = 1;
if ($age>=18 and $age<=65)  echo "Вам eще работать и работать";
    elseif ($age>65) echo "Вам пора на пенсию";
    elseif ($age<=0) echo "неизвестный возраст";
else echo "Вам eще ранно работать";



?>
</body>
</html>