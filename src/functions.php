<?php

// Задание 1

function task1(array $array1)
{
    foreach ($array1 as $item) {
        echo '<p>' . $item . '</p>';
    }
}

function task2(array $array1, $bool = false)
{
    if ($bool) {
        return implode($array1);
    } else {
        return 'Не указана необходимость вывода объединенной строки';
    }
}

// Задание 2
function task3(string $operand, ...$args)
{
    $result = 0;
    if ($operand == '+') {
        foreach ($args as $arg) {
            $result += $arg;
        }
    } elseif ($operand == '-') {
        foreach ($args as $arg) {
            $result -= $arg;
        }
    } elseif ($operand == '*') {
        $result = 1;
        foreach ($args as $arg) {
            $result *= $arg;
        }
    } elseif ($operand == '/') {
        $result = $args[0];
        foreach ($args as $arg) {
            $result /= $arg;
        }
    } else {
        $result = 'Данная операция не поддерживается';
    }
    echo '<br>';
    return $result;
}

// Задание 3
function task4($num1, $num2)
{
    if (gettype($num1) != 'integer' || gettype($num2) != 'integer') {
        return 'В аргументах можно передать только целые числа';
    }

    echo '<table>';
    for ($i = 1; $i <= $num1; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $num2; $j++) {
            echo '<td>' . $i * $j . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

// Задание 4
function task5()
{
    return date('j.n.Y G:i');
}

function task6()
{
    echo '<br>';
    $date = '24.02.2016 00:00:00';
    return strtotime($date);
}

// Задание 5
function task7()
{
    echo '<br>';
    $str = 'Карл у Клары украл Кораллы';
    return str_replace('К', '', $str);
}

function task8()
{
    echo '<br>';
    $str = 'Две бутылки лимонада';
    return str_replace('Две', 'Три', $str);
}

// Задание 6
function task9()
{
    $text = 'Hello again!';
    fopen('test.txt', 'w');
    file_put_contents('test.txt', $text);
}

function task10($fileName)
{
    echo '<br>';
    return file_get_contents($fileName);
}
