<?php

# https://ru.hexlet.io/courses/php-associative-arrays

# lesson 2 Синтаксис

/*
function getComposerFileData()
{
    $res = [
        'autoload' => [
            'files' => ['src/Arrays.php'],
        ], 'config' => [
            'vendor-dir' => '/composer/vendor',
        ],
    ];

    return $res;
}

echo '<pre>';
print_r(getComposerFileData());
echo '</pre>';
*/

# lesson 3 Ассоциативный массив в действии

/*
function getIn(array $arr, array $keys)
{

    $data = $arr;

    foreach ($keys as $item) {
        if (is_array($data) && array_key_exists($item, $data)) {
            $data = $data[$item];
        } else {
            return null;
        }
    }

    return $data;
}
*/

// teacher's solution
/*
function getInHex(array $data, array $keys)
{
    $current = $data;
    foreach ($keys as $key) {
        if (!isset($current[$key])) {
            return null;
        }
        $current = $current[$key];
    }

    return $current;
}

$data = [
    'user' => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2', null => 3, 'active' => false]
    ]
];

$a = getInHex($data, ['unde']);
var_dump($a);
*/

# 4 Цикл foreach

function pick(array $arr, array $keys)
{
    $res = [];
    foreach ($keys as $item) {
        if (array_key_exists($item, $arr)) {
            $res[$item] = $arr[$item];
        }
    }

    return $res;
}

$data = [
    'user' => 'ubuntu',
    'cores' => 4,
    'os' => 'linux',
    'null' => null
];

$a = pick($data, ['null']);

echo '<pre>';
print_r($a);
echo '</pre>';

