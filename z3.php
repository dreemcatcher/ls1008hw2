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
    function calcEverything(){
        print("<ol>\n");
        for ($i=0;$i<func_num_args(); $i++)
        {
            print("<li>" . func_get_arg($i) . "</li>\n");
        }
        print("</ol>\n");
    }
    echo "<br>";
    echo calcEverything("Linux", "Apache", "Mysql", "PHP");
    echo calcEverything("+", 1, 2, 3, 5.2);
?>
</body>
</html>