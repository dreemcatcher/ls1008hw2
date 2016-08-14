<?php
error_reporting(-1);
mb_internal_encoding('utf-8');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашка 2</title>
</head>
<body>
<?php 
/*
Задание #7
Напишите функцию, которая с помощью регулярных выражений, получит информацию о переданных RX пакетах из переданной строки:
Пример строки: “RX packets:950381 errors:0 dropped:0 overruns:0 frame:0. “
Если кол-во пакетов более 1000, то выдавать сообщение: “Сеть есть”
Если в переданной в функцию строке есть “:)”, то нарисовать смайл в ASCII и не выдавать сообщение из пункта №3.
 Смайл должен храниться в отдельной функции
 */
function rxCheck($text){
    
    echo "Результат: {$result}\n";
}

echo rxCheck("RX packets:950381 errors:0 dropped:0 overruns:0 frame:0.");
?>
</body>
</html>