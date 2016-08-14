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
 * Задание #3

Функция должна принимать переменное число аргументов.
Первым аргументом обязательно должна быть строка, обозначающая арифметическое действие, которое необходимо выполнить со всеми передаваемыми аргументами.
Остальные аргументы это целые и/или вещественные числа.

Пример вызова: calcEverything(‘+’, 1, 2, 3, 5.2);
Результат: 1 + 2 + 3 + 5.2 = 11.2
 */
    function calcEverything()
    {

        // Да глупая проверка первый аргумент. Зато работает! И можно в случае чего улучшить
        for ($i = 0; $i <2; $i++) {
            if ($i == 0) {
                $deistv = func_get_arg($i);
            } else {
                //echo func_get_arg($i);
                //echo $deistv;
                $someAct = func_num_args(1);
                $primer='';
                if ($deistv == '+') {
                    echo "Сложение<br>";
                    for ($j = 1; $j < func_num_args(); $j++) {
                        $someAct = $someAct + func_get_arg($j);
                        if ($j==1)
                        {
                            $primer= func_get_arg(1);
                        }else                        {
                            $primer=$primer.'+'.func_get_arg($j);
                        }
                    }
                    echo $primer."=".$someAct."<br>";
                }
                elseif
                    ($deistv == '-') {
                        echo "Вычитание<br>";
                    for ($j = 1; $j < func_num_args(); $j++) {
                        $someAct = $someAct - func_get_arg($j);
                        if ($j==1)
                        {
                            $primer= func_get_arg(1);
                        }else                        {
                            $primer=$primer.'-'.func_get_arg($j);
                        }
                    }
                    echo $primer."=".$someAct."<br>";
                    }
                elseif ($deistv == '*') {
                        echo "Умножение<br>";
                    for ($j = 1; $j < func_num_args(); $j++) {
                        $someAct = $someAct * func_get_arg($j);
                        if ($j==1)
                        {
                            $primer= func_get_arg(1);
                        }else                        {
                            $primer=$primer.'*'.func_get_arg($j);
                        }
                    }
                    echo $primer."=".$someAct."<br>";
                    }
                elseif ($deistv == '/') {
                        echo "Деление<br>";
                    for ($j = 1; $j < func_num_args(); $j++) {
                        $someAct = $someAct / func_get_arg($j);
                        if ($j==1)
                        {
                            $primer= func_get_arg(1);
                        }else                        {
                            $primer=$primer.'/'.func_get_arg($j);
                        }
                    }
                    echo $primer."=".$someAct."<br>";
                    }
                else {
                        echo "Неизвестная операция<br>";
                    }
            }
        }
    }
    echo "<br>";
    echo calcEverything("+", 1, 2, 3, 5.2);
    echo calcEverything("+", 8, 8, 15, 16, 23, 42, 84,186);
    echo calcEverything("-", 1, 2, 3, 5.2);
    echo calcEverything("*", 1, 2, 3, 5.2);
    echo calcEverything("/", 1, 2, 3, 5.2);
   // echo calcEverything("+", 1, 2, 3, 5.2);
?>
</body>
</html>