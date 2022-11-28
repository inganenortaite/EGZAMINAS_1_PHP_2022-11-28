<?php

/*
 4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą. (1 balas)
*/

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

function exercises4(array $holidaysList): void
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
        $fileName = 'holidays.txt';
        $file = fopen($fileName, 'a+') or die('File is not working!');
        fwrite($file, 'Destination ' . '"' . $holidays['destination'] . '".' . PHP_EOL);
        fwrite($file, 'Titles: ' . $holidays['titles'] . PHP_EOL);
        fwrite($file, 'Total: ' . $holidays['total'] . PHP_EOL);
        fclose($file);

        $arrKeys = array_keys($fullHolidaysList);
        if (end($arrKeys) !== $key) {
            $file = fopen($fileName, 'a+') or die('File is not working!');
            fwrite($file, '****************************************' . PHP_EOL);
            fclose($file);
        }
    };
}

exercises4($holidays);