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
Задание #8
Создайте средствами ОС файл test.txt и поместите в него текст “Hello, world”
Напишите функцию, которая будет принимать имя файла, открывать файл и выводить содержимое на экран.
*/
function OpenSomeFile($a){
    $fp = fopen($a, "r");
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
}
echo OpenSomeFile('test.txt');
echo "<br>";
?>
</body>
</html>