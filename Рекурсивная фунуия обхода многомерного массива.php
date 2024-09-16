// Многомерный массив. Рекурсивная функция обхода этого массива с выводом его элементов
<?php

$multi_array = [
    'key1' => [
        'key2' => 'value2',
        'key3' => [
            'key4' => 'value4',
            'key5' => 'value5'
        ]
    ],
    'key6' => 'value6'
];

function traverse_array($array, $prefix = '') {
    foreach ($array as $key => $value) {
        $current_prefix = $prefix . $key . '.';
        if (is_array($value)) {
            traverse_array($value, $current_prefix);
        } else {
            echo $current_prefix . $value . "\n";
        }
    }
}

traverse_array($multi_array);
