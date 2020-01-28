<?php

declare(strict_types=1);

namespace classes;


class pensionFond
{
    public string $name;       //Типизированные свойства классов
    public int $age;        //Типизированные свойства классов
    protected const COUNTRY = 'Ukraine';  //Поддержка модификаторов видимости для констант класса
    public string $city;        //Типизированные свойства классов

    function showCity(): void  //Добавлен возвращаемый тип «void»
    {
        $this->city ??= 'Unknown city';  //Присваивающий оператор объединения с null
        echo self::COUNTRY . ' -> ' . $this->city . '<br>';
    }

    function yearsToPension(int $pensionAge): int //Указание типа возвращаемых значений
    {
        return $pensionAge - $this->age;
    }
}
