<?php
error_reporting(-1); 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашка 2</title>
    <style>
        <?php
        include "css/main.css";
        ?>
    </style>
</head>
<body>
<table width=100% border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td>
            <?php
            /*
             *Задание #2
             * Функция должна принимать 2 параметра:
             * массив чисел;
             * строку, обозначающую арифметическое действие,    которое нужно выполнить со всеми элементами массива.
             * Функция должна вывести результат на экран.
             * Функция должна обрабатывать любой ввод, в том числе некорректный и выдавать сообщения об этом
            */
            function mySecondFunc($arr=array(1,2,3), $operation='+'){
                if ($operation == '+') {
                    echo "Сложение<br>";
                    echo array_sum($arr) ."<br>";
                }
                elseif ($operation =='-') {
                    echo "Вычитание<br>";
                    $someAct=$arr[0];
                    for ($i = 0; $i<count($arr); $i++) {
                        $someAct = $someAct - $arr[$i];
                        echo $someAct."<br>";
                    }
                }
                elseif ($operation == '*') {
                    echo "Умножение<br>";
                    $someAct=$arr[0];
                    for ($j = 0; $j<count($arr); $j++) {
                        $someAct = $someAct * $arr[$j];
                        echo $someAct."<br>";
                    }
                }
                elseif ($operation == '/') {
                    echo "Деление<br>";
                    $someAct=$arr[0];
                    for ($j = 0; $j<count($arr); $j++) {
                        $someAct = $someAct / $arr[$j];
                        echo $someAct."<br>";
                    }
                }
                else {
                    echo "Неизвестная операция<br>";
                }
            }
            $numArray= array (4,8,15,16,23,42);
            echo "<br>";
            echo mySecondFunc($numArray, '+');
            echo mySecondFunc($numArray, '-');
            echo mySecondFunc($numArray, '*');
            echo mySecondFunc($numArray, '/');
            echo mySecondFunc($numArray, '=');
            ?>
        </td>
        <td>
        </td>
    </tr>
</table>
</body>
</html>