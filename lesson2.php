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
<form action="lesson2.php" method="post">
    Имя:  <input type="text" name="name" /><br />
    Cколько тебе лет: <input type="text" name="age" /><br />
    <br>
    <input type="submit" name="submit" value="Отправь меня!" />
    <br>
    <br>
    <hr>
</form>
<?php
$name = $_POST['name'];
$age = $_POST['age'];
echo 'Меня зовут: '.$name.'<br>';
echo 'Мне '.$age.' <b>лет</b>'.'<br>';

?>
</body>
</html>