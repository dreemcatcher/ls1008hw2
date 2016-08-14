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
 * Задание #7
 * Дана строка: “Карл у Клары украл Кораллы”. удалить из этой строки все заглавные буквы “К”.
 * Дана строка “Две бутылки лимонада”. Заменить “Две”, на “Три”. По желанию дополнить задание.
 */
$text = 'Карл у Клары украл кораллы';
$regexp= '/К/u';
$result=preg_replace($regexp, ' ', $text);
echo $result;
echo "<br>";

$othertext = 'Две бутылки лимонада';
$regexp= '/Две/u';
$result=preg_replace($regexp, 'Три', $othertext);
echo $result;
?>
</body>
</html>