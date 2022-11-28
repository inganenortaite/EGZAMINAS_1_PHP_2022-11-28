<?php

/*
 6. Parašykite programą, kuri per argumentų padavimą terminale, paleidžiant funkciją juos priimtų, sudaugintų
tarpusavyje ir pakeltų kvadratu. Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas ne skaičius, reikia, kad
terminale gautumėme atitinkamą klaidos kodą ir pranešimą. (2 balai)
*/

$number = (float)$argv[1];
$number2 = (float)$argv[2];
$formula = ($number * $number2)**2;

if (is_numeric($argv[1]) === false && is_numeric($argv[2]) === false ||
    is_numeric($argv[1]) === false && is_numeric($argv[2]) ||
    is_numeric($argv[1]) && is_numeric($argv[2]) === false) {
    echo 'Prašome įvesti tik skaičius!' . PHP_EOL;
    exit(1);
}

echo 'Jūsų įvestų skaičių ' . $number . ' ir ' . $number2 . ' sandauga pakelta kvadratu yra lygi: ' . $formula . PHP_EOL;