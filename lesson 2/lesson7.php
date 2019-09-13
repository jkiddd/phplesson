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
#for
print "<table><tr>";

for ($i = 1; $i < 11; $i++) {
    for ($j = 1; $j < 11; $j++) {
        if ($i % 2 == 0 && $j % 2 == 0) {
            print "<td>" . '(' . ($j * $i) . ')' . "</td>";
        } elseif ($i % 2 == 1 && $j % 2 == 1) {
            print "<td>" . '[' . ($j * $i) . ']' . "</td>";
        } else {
            print "<td>" . '&nbsp' . ($i * $j) . '&nbsp' . "</td>";
        }
    }
    if ($i != 10) {
        print "</tr><tr>";
    }
}

print "</tr></table>";

?>

</body>
</html>