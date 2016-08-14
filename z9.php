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
Задание #9
Создайте файл anothertest.txt средствами PHP. Поместите в него текст - “Hello again!”
 */
function createFile($a='somerandomname.txt',$b='Hello'){
    $fp = fopen($a, "w");
    fwrite($fp, $b);
    fclose($fp);
    $fp = fopen($a, "r");
    // Тут проверка создался ли файл и чтение из него
    if ($fp)
    {
        while (!feof($fp))
        {
            $mytext = fgets($fp, 999);
            return $mytext;
        }
    }
    else echo "Ошибка при открытии файла";
    fclose($fp);

    // Тут проверка кончилась
}
    echo createFile("anothertest.txt", "Hello again");
    echo "<br>";
?>
</body>
</html>