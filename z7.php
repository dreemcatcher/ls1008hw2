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
$sting="Карл у Клары украл Кораллы";
function TestRegularFirst(){
    $text='Карл у Клары украл кораллы, а Клара у Карла украла кларнет .';
    echo '<strong>Пример:</strong> '.htmlspecialchars($text);
    preg_match_all("/(К.*?)\s/",$text,$result);
    echo '<br/><strong>Результат:</strong> <pre>'.var_export($result[1],true).'</pre>';
}
echo TestRegularFirst();


?>
</body>
</html>