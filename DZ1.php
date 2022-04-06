<?php

// Задание 1
$name = 'Марат';

$age = '29';

echo "Меня зовут: $name" . '<br>';

echo "Мнe $age лет" . '<br>';

echo '“!|/’”\\' . '<br>';

// Задание 2
const ALL_PICTURES = 80;
const BY_MARKERS = 23;
const BY_PENCILS = 40;

$byPaints = ALL_PICTURES - (BY_MARKERS + BY_PENCILS);
echo $byPaints . '<br>';

// Задание 3
$myAge = mt_rand(1, 100);

if ($myAge >= 18 && $myAge <= 65) {
    echo 'Вам еще работать и работать';
} elseif ($myAge > 65) {
    echo 'Вам пора на пенсию';
} elseif ($myAge < 17) {
    echo 'Вам ещё рано работать';
} else {
    echo 'Неизвестный возраст'; // в текущей реализации сюда попасть не выйдет
}

// Задание 4
echo '<br>';
$day = mt_rand(0, 7); // 0, чтобы был шанс сработать default

switch ($day) {
    case $day >= 1 && $day <= 5:
        echo 'Это рабочий день';
        break;
    case $day == 6 || $day == 7:
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
}

// Задание 5
echo '<br>';
echo '<hr>';
$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
];

$toyota = [
    'model' => 'Y2',
    'speed' => 160,
    'doors' => 4,
    'year' => '2022'
];
$opel = [
    'model' => 'Z1',
    'speed' => 230,
    'doors' => 2,
    'year' => '2017'
];

$allCars = [
    'bmw' => $bmw,
    'opel' => $opel,
    'toyota' => $toyota
];

foreach ($allCars as $key => $value) {
    echo 'CAR ' . $key . '<br>';
    echo $value['model'] . ' ' . $value['speed'] . ' ' . $value['doors'] . ' ' . $value['year'] . '<br>';
}

// Задание 6
echo '<br>';
echo '<hr>';
echo '<table>';

for ($i = 1; $i < 11; $i++) {
    echo '<tr>';
    for ($j = 1; $j < 11; $j++) {
        echo ' ';
        if (($i % 2 == 0) && ($j % 2 == 0)) {
            echo '<td>' . '(' . $i * $j . ')' . '<td>';
        } elseif (($i % 2 != 0) && ($j % 2 != 0)) {
            echo '<td>' . '[' . $i * $j . ']' . '<td>';
        } else {
            echo '<td>' . $i * $j . '<td>';
        }
    }
    echo '</tr>';
}
echo '</table>';
