<?php

/*
 3. Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
 Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
 Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (2 balai)
*/

//   Destination "Paris".
//   Titles: "Romantic Paris", "Hidden Paris"
//   Total: 99500
//   ************
//   Destination "New York"

$holidays = [
    [
        'title' => 'Romantic Paris',
        'destination' => 'Paris',
        'price' => 1500,
        'tourists' => 55,
    ],
    [
        'title' => 'Amazing New York',
        'destination' => 'New York',
        'price' => 2699,
        'tourists' => 21,
    ],
    [
        'title' => 'Spectacular Sydney',
        'destination' => 'Sydney',
        'price' => 4130,
        'tourists' => 9,
    ],
    [
        'title' => 'Hidden Paris',
        'destination' => 'Paris',
        'price' => 1700,
        'tourists' => 10,
    ],
    [
        'title' => 'Emperors of the past',
        'destination' => 'Beijing',
        'price' => null,
        'tourists' => 10,
    ],
];

function exceptionalHoliday(array $array, mixed $key): array
{
    $newArray = [];

    foreach ($array as $element) {
        if (!isset($newArray[$element[$key]]))
            $newArray[$element[$key]] = $element;
    }
    $array = array_values($newArray);
    return $array;
}

function exercises3(array $holidaysList): void
{
    $fullHolidaysList = [];

    for ($i = 0; $i < count($holidaysList); $i++) {
        if (isset($holidaysList[$i]['price'])) {
            $holidayResume = [
                'destination' => $holidaysList[$i]['destination'],
                'titles' => ['"' . $holidaysList[$i]['title'] . '"'],
                'total' => $holidaysList[$i]['price'] * $holidaysList[$i]['tourists']
            ];

            foreach ($holidaysList as $holiday) {
                if ($holidayResume['destination'] === $holiday['destination'] && !in_array('"' . $holiday['title'] . '"', $holidayResume['titles'], true)) {
                    $holidayResume['titles'][] = '"' . $holiday['title'] . '"';
                    $holidayResume['total'] += $holiday['price'] * $holiday['tourists'];
                }
            }
            $holidayResume['titles'] = implode(", ", $holidayResume['titles']);
            $fullHolidaysList[] = $holidayResume;
        };
    };

    $fullHolidaysList = exceptionalHoliday($fullHolidaysList, 'destination');

    foreach ($fullHolidaysList as $key => $holidays) {
        echo 'Destination ' . '"' . $holidays['destination'] . '".' . PHP_EOL;
        echo 'Titles: ' . $holidays['titles'] . PHP_EOL;
        echo 'Total: ' . $holidays['total'] . PHP_EOL;

        $arrKeys = array_keys($fullHolidaysList);
        if (end($arrKeys) !== $key) {
            echo '****************************************' . PHP_EOL;
        }
    };
}

exercises3($holidays);