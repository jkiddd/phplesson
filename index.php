<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lesson php</title>
</head>
<body>

<?php

$var = 'привет';
$a = 3;
$b = 5;
$c = $a+$b;

echo 'a+b='."$c".'<br>';
#первый тип вывода 

echo 'a+b='.($a+$b).'<br>';
#второй тип вывода информации
echo "hello world ";
echo $var.'<br>';
echo strftime(' %d - %Y - %A').'<br>';
# вывод тип переменой
echo gettype($b).'<br>';
echo gettype($var).'<br>';
echo gettype($var3).'<br>';
?>

</body>
</html>
