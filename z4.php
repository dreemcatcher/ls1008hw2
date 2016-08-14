<?php
error_reporting(-1);
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
Задание #4

Функция должна принимать два параметра – целые числа.
Если в функцию передали 2 целых числа, то функция должна отобразить таблицу умножения размером со значения параметров, переданных в функцию.
В остальных случаях выдавать корректную ошибку.

 */

// для начала проверим на целочисленность и вообще число ли нам дают
// проверка число ли это /^\+?\d+$/  - регулярка!
function intcheck($a){
    if(!intval($a) or $a < 1 or !preg_match('/^\+?\d+$/', $a))
    {
        return 'NOT ok';
    }
    else
    {
        return 'ok';
    }
}

// теперь функция построения таблицы. Для простоты ввода включим уже в неё, проверку не целочисленность
// Чтобы 100 раз код не переписывать проверку вынесем в отодельную функцию
function multiplicationTable($x,$y){
    if (intcheck($x)=='ok' and intcheck($y)=='ok'){
        echo "<table>";
        echo "Выводим таблицу размером ".$x." на ".$y;
        echo "<tr>";
        for($i=1;$i<$x; $i++){
            for($j=1;$j<$y;$j++){
                //$m=$i*$j;
                $proizv=$i*$j." ";
                echo "<td>" . $proizv . "</td>";
            }
            $j=1;
            echo "</tr>";
        }
        echo "</table>";
    }else
    {
        echo "Один из параметров введён неверно";
        echo "<br>Что это вообще за параметр такой  ".$x."  ".$y."?";
    }
}
echo "<br>";
echo multiplicationTable(1,1);
echo "<br>";
echo multiplicationTable(2,2);
echo "<br>";
echo multiplicationTable(3,3);
echo "<br>";
echo multiplicationTable(4,4);
echo "<br>";
echo multiplicationTable(5,6);
echo "<br>";
echo multiplicationTable(6,6);

echo "<br>";
echo multiplicationTable(6.7,6);

echo "<br>";
echo multiplicationTable(89,-31);

echo "<br>";
echo multiplicationTable(6,'Игорь');

//echo "<br>";
//echo intcheck(1);
//echo "<br>";
//echo intcheck(1.1);
//echo "<br>";
//echo intcheck('1asd');
?>
</body>
</html>