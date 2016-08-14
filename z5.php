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
Задание #5

Написать две функции.
Функция №1 принимает 1 строковый параметр и возвращает true, если строка является палиндромом*, false в противном случае. Пробелы и регистр не должны учитываться.
Функция №2 выводит сообщение в котором на русском языке оговаривается результат из функции №1

 * Палиндром – строка, одинаково читающаяся в обоих направлениях.
 */

function palindromCheck($text){
    // Удаляем пробелы
    $WithoutSpace = str_replace(" ","",$text);
    // Переводим буквы в нижний регистр
    $SmallText=mb_strtolower($WithoutSpace);
    $length = mb_strlen($SmallText);
    // считаем символы
    $halfLength= floor($length/2);
    for ($i=0; $i<=$halfLength; $i++){
        $FirstSymbol=mb_substr($SmallText,$i,1);;
        $LastSymbol=mb_substr($SmallText,$length-1-$i,1);;
        if ($FirstSymbol==$LastSymbol){
           // $result='TRUE';
            return TRUE;
        }else{
           // $result='FALSE';
            return FALSE;
            break;
        }
    }
    echo "Результат: {$result}\n";
}

function verifivator($r){
    if ($r==TRUE){
        echo "Это палиндром";
    }else{
        echo "Это не палиндром";
    }
}

echo "<br>";
echo verifivator(palindromCheck('А роза упала на лапу Азора'));
echo "<br>";
echo verifivator(palindromCheck('Болвана в лоб'));
echo "<br>";
echo verifivator(palindromCheck('Да гневен гад'));
echo "<br>";
echo verifivator(palindromCheck('Маска как сам'));
echo "<br>";
echo verifivator(palindromCheck('Чем нежен меч'));
echo "<br>";
echo verifivator(palindromCheck('Какой-то там текст ждля проверки что не палиндром'));
echo "<br>";

echo verifivator(palindromCheck('Вид усов осудив'));
echo "<br>";

echo verifivator(palindromCheck('     Лев с ума ламу свёл               '));
echo "<br>";
echo verifivator(palindromCheck('      Кот, сука, за кусток              '));
echo "<br>";
echo verifivator(palindromCheck('           Уверена я, а не реву         '));
echo "<br>";
echo verifivator(palindromCheck('          Цени в себе свинец          '));
echo "<br>";
echo verifivator(palindromCheck('         Отлично кончил-то           '));
echo "<br>";
echo verifivator(palindromCheck('      Кошмар, срам, шок              '));
echo "<br>";
echo verifivator(palindromCheck('             Милашка, как шалим       '));
echo "<br>";
?>
</body>
</html>