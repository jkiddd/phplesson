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
#массив
// $arr = array(
//    'name' => 'ivan' ,
//    'sname' =>'shiryaev',
//    'age' => '31'
// );
// echo '<pre>';
// print_r ($arr);
// echo '</pre>';
// var_dump ($arr);
$bmw = array(
    'model' => 'X5',
    'speed' => '120',
    'doors' => '5',
    'year' => '2015'
);
$toyota = array(
    'model' => 'alphard',
    'speed' => '120',
    'doors' => '4',
    'year' => '2018'
);
$opel = array(
    'model' => 'mokka',
    'speed' => '150',
    'doors' => '4',
    'year' => '2017'
);

foreach ($bmw as &$car)
{
    echo "$car -";
}

?>

</body>
</html>