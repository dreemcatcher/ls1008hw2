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
/**
Задание #6
Выведите информацию о текущей дате в формате 31.12.2016 23:59
Выведите unixtime время соответствующее 24.02.2016 00:00:00.

 */

$d = getdate(); // использовано текущее время
foreach ( $d as $key => $val )
{
    $key = $val;
}
echo "<br>Выведите информацию о текущей дате в формате 31.12.2016 23:59<br>";
echo "<br>$d[mday].$d[mon].$d[year]"." "."$d[hours]".":"."$d[minutes]<br>";
echo "<br>Выведите unixtime время соответствующее 24.02.2016 00:00:00.<br>";
echo "<br>$d[mday].$d[mon].$d[year]"." "."$d[hours]".":"."$d[minutes]".":"."$d[seconds]<br>";

echo "<br>";

// или так, не совсем понятно во втором случае надо вывести дану или именно 24.02.2016 00:00:00
$mt = mktime(00,00,00,24,02,2015);
//echo $mt."<br>";
echo 'Дата время: '.date('d.m.Y H:i:s', $mt).'<br>';
echo '=======================================<br>';
?>
</body>
</html>