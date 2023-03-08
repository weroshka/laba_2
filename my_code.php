<?php

//Task 1

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " and french fries!!!!!!";
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";


//Task 2

$a = 20;
echo $a;
echo "\n";
$b = 0.8;
echo $b;
echo "\n", 24-12;
$last_month = 1187.23;
$this_month= 1089.98;
echo "В прошлом месяце я потратил на ", ($last_month-$this_month), " больше, чем в этом\n";


//Task 11

$num_languages = 4;
$months = 11;
$days = 16 * $months;
$days_per_language =  $days / $num_languages;
echo $days_per_language;


//Task 12

echo 8**2, "\n";


//Task 13

$my_num = 2008;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "answer = $answer\n";


//Task 14

//1.1. Work with %
$a = 10;
$b = 3;
echo "a % b = ", $a % $b, "\n";

//1.2
if($a % $b == 0)
{
    echo "Делится: ", $a/$b, "\n";
}
else
{
    echo "Делится с остатком: ", $a%$b, "\n";
}

//Work with pow
$st = pow(2,10);
echo "\n", $st;

//Work with sqrt
$st = sqrt(245);
echo "\n", $st;

//Work with array
$array = array(4, 2, 5, 19, 13, 0, 10);
$answer = 0;
foreach ($array as $elem) {
    $answer += $elem**2 ;
}
echo "\n", sqrt ($answer), "\n";

//Work with rounding
echo "\n", round (sqrt(379),);
echo "\n", round (sqrt(379), 1);
echo "\n", round (sqrt(379),2), "\n";
$arr = Array('floor' => floor(sqrt(379)), 'ceil' =>ceil(sqrt(587)));
foreach ($arr as $value) {
    echo "\n", $value, " " ; }

//Work with min\max
$arr = array(4, -2, 5, 19, -130, 0, 10);
echo "\n", min($arr), " ", max($arr);

//Work with random
echo "Random number from 1 to 100: ", rand(1,100), "\n";
$mas = range(1,10);
for ($n=1; $n<11; $n++)
{
    $mas[$n] = rand(1,100);
    echo "mas[$n] = ", $mas[$n], "\t";
    if($n == 10)
    {
        echo "\n";
    }
}

//Work with module
$a = rand(1,100);
$b = rand(1,100);
echo "|a-b| = ", abs($a-$b), "\n";

$mas = Array(1,2,-1,-2,3,-3);
for($n=0; $n < sizeof($mas); $n++)
{
    if($mas[$n] < 0)
    {
        $mas[$n] *= -1;
    }
    echo "mas[$n] = ", $mas[$n], "\t";
    if($n == sizeof($mas)-1)
    {
        echo "\n";
    }
}

//General
$number = rand(1, 100);
$div = 2;
$mas_div = array(1);
while ($div <= $a)
{
    if ($a % $div == 0)
    {
        $mas_div[] = $div;
    }
    $div += 1;
}

echo "\n" , $a;
echo "\n";
foreach ($mas_div as $value)
{
    echo  $value, " " ;
}
echo "\n";

$some_arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$counter = 0;
foreach ($some_arr as $value)
{
    $sum += $value;
    $counter++;
    if ($sum > 10) {
        $counter--;
        break;
    }
}
echo "<br>Количество делителей: {$counter}";


//Task 15
function printStringReturnNumber()
{
    echo "Lala\n";
    return 2002;
}

$my_num = printStringReturnNumber();
echo "my_num = ", $my_num, "\n";

//Task 16

function increaseEnthusiasm($str)
{
    return ($str."!");
}
echo increaseEnthusiasm("i don`t know what to say"), "\n";

function repeatThreeTimes($str)
{
    return ($str.$str.$str);
}
echo repeatThreeTimes("Повторение - мать учения! "), "\n";

echo increaseEnthusiasm(repeatThreeTimes("I`m tired of this lab")), "\n";

function cut($str, $num, $p2=10)
{
    return mb_substr($str, 0, $num);
}

function my_next($arr, $i)
{
    if($i < sizeof($arr))
    {
        echo "arr[$i] = ", $arr[$i], "\t";
        my_next($arr, $i+1);
    }
    if($i == 0)
    {
        echo "\n";
    }
    return 0;
}
$arr = range(1,10);
my_next($arr, 0);

function my_add($val)
{

    if($val > 9)
    {
        $result = 0;
        $tmp = $val;

        while($tmp > 0)
        {
            $result += $tmp % 10;
            $tmp = (int)($tmp / 10);
        }
        if($result > 9) {
            $result = my_add($result);
        }
        else
        {
            return $result;
        }
    }
    else
    {
        return $val;
    }
}
echo my_add(111), "\n";


//Task 17

$mas = array('','','');
for($i = 0; $i < sizeof($mas); $i++)
{
    for($j = $i+1; $j > 0; $j--)
    {
        $mas[$i] .= 'x';
    }
    echo "mas[$i] = ", $mas[$i], "\t";
}
echo "\n";

function arrayFill($value, $length)
{
    if($length > 0)
    {
        $mas = array($value);
        echo "mas[0] = ", $mas[0], "\t";
        for($n = 1; $n < $length; $n++)
        {
            array_push($mas, $value);
            echo "mas[$n] = ", $mas[$n], "\t";
        }
        echo "\n";
        return $mas;
    }
    else
    {
        return;
    }

}

$arr = arrayFill('x', 5);
for($i = 0; $i < 5; $i++)
{
    echo "mas[$i] = ", $mas[$i, "\t";
}
echo "\n";

$array = array (array(1, 2, 3),
    array(4, 5),
    array(6)
);
$sum =0;
foreach ($array as $value)
{
    $sum +=array_sum($value);
}
echo $sum, "\n", "\n";

$arr = array();
$iter = 1;
for($n = 0; $n < 3; $n++)
{
    array_push($arr, array());
    for($j = 0; $j < 3; $j++)
    {
        array_push($arr[$n], $iter);
        $iter++;
        echo "arr[$n][$j] = ", $arr[$n][$j], "\t";
    }
}
echo "\n";

$ARRAY = [2, 5, 3, 9];
$result = 0;
for ($i = 0; $i < 3; $i++) {
    $tmpSum = $ARRAY[$i] * $ARRAY[$i + 1];
    $result += $tmpSum;
}
echo "Сумма элементов массива, умноженных на следующий: {$result}";

$user = ["name" => "Murchello", "surname" => "Kurtmullaev", "patronymic" => "Sergeevich"];
echo "<br>user в виде Фамилия Имя Отчество: {$user["surname"]} {$user["name"]} {$user["patronymic"]}";

$date = ["year" => date("2021"), "month" => date("May"), "day" => date("8")];
echo "<br>Дата в виде год-месяц-день: {$date["year"]}-{$date["month"]}-{$date["day"]}";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo "<br>Длина массива arr: ", count($arr);

echo "<br>Последний элемент массива arr: {$arr[count($arr) - 1]}, предпоследний элемент массива arr {$arr[count($arr) - 2]}";


//Task 18

function Ten($a, $b)
{
    return (($a + $b) > 10);
}
echo Ten(0,6) ? 'true' : 'false', "\n";

function equal($a, $b)
{
    return ($a == $b) ;
}
echo equal(0,0) ? 'true' : 'false', "\n";

$test = 0;
echo (($test == 0) ? 'верно' : ''), "\n";

$age = 1000;
if($age < 10 || $age > 99)
{
    echo "Число меньше 10 или больше 99\n";
}
else
{
    echo (array_sum(str_split($age)) <= 9) ? "Сумма цифр однозначна\n" : "Сумма цифр двузначна\n";
}

$arr = [];
for ($i = 0; $i <= rand(1, 10); $i++)
{
    $arr[$i] = rand(1, 10);
}
echo "<br>arr: ", arrToStr($arr);
if (count($arr) == 3) {
    $sum = 0;
    foreach ($arr as $elem) {
        $sum += $elem;
    }
    echo "Sum = {$sum}";
}


//Task 19

for($n = 1; $n <=20; $n++)
{
    for($i = $n; $i >0; $i--)
    {
        echo "x";
    }
    echo "\n";
}


//Task 20

$numm = array(1, 2, 3, 4, 5);
$srednee = array_sum($numm)/ count($numm);
echo $srednee;

echo "Сумма  = ", (1+100)*100/2, "\n";

$arr = array(78,12,333,89,61);
$arr = array_map("sqrt", $arr);
for($n=0; $n < sizeof($arr); $n++)
{
    echo "arr[$n] = ", $arr[$n], "\t";
}
echo "\n";

$arr = array_combine(range('a', 'z'), range(1, 26));
foreach ($arr as $key => $value)
{
    echo "$key => $value<br>";
}

$str = "1234567890";
$arr = str_split($str);
$arr = array_chunk($arr, 2);
$arr = array_map('implode', $arr);
echo array_sum($arr);



