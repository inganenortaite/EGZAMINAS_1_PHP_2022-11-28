<?php

/*
 Užduotis nuo 1 iki 4 atlikite galite į vieną failą, rekomenduojame 5, 6, 7 užduotis atlikti atskiruose failuose. 
 Funkcijų ir kintamųjų pavadinimus vadinkite suprantamai,
 taip kad kiti galėtu suprasti ką funkicija daro ar kintamasis saugo (vertinime atsižvelgsime į teisingus namingus)
 Pabandykite laikykis code standartų, tiek kiek esame apie juos šnekėje.
 */

/*
 1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas) +0.5 jeigu array funkcijos naudojamos
*/

$numbers = [
    15,
    55,
    66,
    91,
    100,
    995,
    17,
    550,
];

function exercises1(array $numbers)
{
    $sumEvenNumbers = array_sum(array_filter($numbers, function($evenNumbers) {
        return $evenNumbers % 2 == 0;
    }));
    return $sumEvenNumbers;
};

echo 'Visų masyve esančių lyginių skaičių suma yra lygi: ' . exercises1($numbers) . PHP_EOL;