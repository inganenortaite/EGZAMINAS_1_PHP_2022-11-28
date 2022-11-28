<?php

/*
 2. Grąžinkite visų skaičių, esančių $numbers2 masyve, sandaugą (1 balas), +0.5 jeigu array funkcijos naudojamos
*/

$numbers2 = [
    [1, 3, 5],
    [55, 87, 100],
    [12],
    [],
];

function exercises2($numbers2)
{
    return array_reduce($numbers2, function (int $sum, array $array) {
        foreach ($array as $number)
        $sum *= $number;
        return $sum;
        },
        1);
}

echo 'Visų masyve esančių skaičių sandauga yra lygi: ' . exercises2($numbers2) . PHP_EOL;