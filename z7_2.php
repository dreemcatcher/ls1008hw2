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
    // Ищем смайлик
    $smileRegexp = '/[:][)]/';
    $Smileresult = preg_match($smileRegexp, $text, $foundSmile);
    //print_r ($foundSmile);
    if ($Smileresult==1){
        echo ":)";
    }
    else
    {
        // вычисляем packets:950381 ибо просто по числу найти можно много чего
        $regexp = '/packets:[0-9]{1,9}/';
        $result = preg_match($regexp, $text, $found);
        //print_r ($found);
        //Ковыряем результат, выкидваем из него packets: чтобы получить число с которым можно сравнивать
        $regexp = '/[0-9]{1,9}/';
        $result = preg_match($regexp, $text, $foundPacks);
        //print_r ($foundPacks);
        $countPacks=$foundPacks[0];
        echo $countPacks;
        echo "<br>";
        if ($countPacks>1000){
            echo "Сеть есть<br>";
        }
        else{
            echo "Сети нет<br>";
        }

    }
}

echo rxCheck("RX packets:950381 errors:0 dropped:0 overruns:0 frame:0.");
echo "<br>";
echo rxCheck("RX packets:100 errors:0 dropped:0 overruns:0 frame:0.");
echo "<br>";
echo rxCheck("RX packets:999999 errors:0 dropped:0 overruns:0 frame:0.");
echo "<br>";
echo rxCheck("RX packets:95031 errors:0 dropped:0 overruns:0 frame:0.");
echo "<br>";
echo rxCheck("RX packets:0381 errors:0 dropped:0 overruns:0 frame:0.");
echo "<br>";
echo rxCheck("RX packets:112 errors:0 dropped:0 overruns:0 frame:0.  :)");
echo "<br>";
?>
</body>
</html>