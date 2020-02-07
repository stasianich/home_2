<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$pensionAge = 65;

$employees = [];

$employees[] = new classPension\pensionFond();
$employees[0]->name = 'Vasya';
$employees[0]->age = 36;
$employees[0]->city = 'Kyiv';

$employees[] = new classPension\pensionFond();
$employees[1]->name = 'Petya';
$employees[1]->age = 41;
$employees[1]->city = 'Kyiv';

$employees[] = new classPension\pensionFond();
$employees[2]->name = 'Misha';
$employees[2]->age = 23;


//Добавление функции is_countable()
if (is_countable($employees)) {
    // Добавление функций array_key_first() и array_key_last()
    for ($i = array_key_first($employees); $i <= array_key_last($employees); $i++) {
        echo "<b>" . $employees[$i]->name . " :</b><br>";
        echo "Живет в : ";
        $employees[$i]->showCity();
        echo "Осталось до пенсии : " . $employees[$i]->yearsToPension($pensionAge) . ' лет <br><br>';
    }
} else {
    echo 'Error while filling the array!';
}
