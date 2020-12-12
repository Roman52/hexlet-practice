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

# lesson 4 Цикл foreach
/*
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
*/

# lesson 5 Популярные функции для работы с ассоциативными массивами

/*
function genDiff(array $arr1, array $arr2): array
{
    $res = [];

    foreach ($arr1 as $key => $value) {
        if (array_key_exists($key, $arr2)) {
            if ($arr1[$key] === $arr2[$key]) {
                $res[$key] = 'unchanged';
            } else {
                $res[$key] = 'changed';
            }
        } else {
            $res[$key] = 'deleted';
        }
    }

    foreach ($arr2 as $key => $value) {
        if (! array_key_exists($key, $res)) {
            $res[$key] = 'added';
        }
    }

    return $res;
}
*/

// teacher's solution
/*
function genDiffHex(array $data1, array $data2)
{
    $keys = array_merge(array_keys($data1), array_keys($data2)); // https://youtu.be/vkUTX1hruF8?t=929
    // значения ключей нам не важны, интересны только сами ключи. Объединяя в один массив все ключи попадут туда

    $result = [];
    foreach ($keys as $key) {
        // https://ru.hexlet.io/courses/php-associative-arrays/lessons/syntax/theory_unit
        // а дальше просто по условию задачи проганяем: (если ключ попал в массив $keys - то это означает, что он был либо в первом либо во втором массиве, и мы уже отдельно проверяем по условию задачи в каком был, в каком не был)
        added — ключ отсутствовал в первом массиве, но был добавлен во второй
        deleted — ключ был в первом массиве, но отсутствует во втором
        changed — ключ присутствовал и в первом и во втором массиве, но значения отличаются
        unchanged — ключ присутствовал и в первом и во втором массиве с одинаковыми значениями

        if (!array_key_exists($key, $data1)) {
            $result[$key] = 'added';
        } elseif (!array_key_exists($key, $data2)) {
            $result[$key] = 'deleted';
        } elseif ($data1[$key] !== $data2[$key]) {
            $result[$key] = 'changed';
        } else {
            $result[$key] = 'unchanged';
        }
    }

    return $result;
}

$result = genDiffHex(
    ['one' => 'eon', 'two' => 'two', 'four' => true],
    ['two' => 'own', 'zero' => 4, 'four' => true]
);
*/

// сделал решение по памяти после анализа решения учителя
/*
function genDiff(array $arr1, array $arr2)
{
    $keys = array_merge(array_keys($arr1), array_keys($arr2));
    $res = [];

    foreach ($keys as $item) {
        if (! array_key_exists($item, $arr1)) {
            $res[$item] = 'added';
        } elseif (array_key_exists($item, $arr1)) {
            if (! array_key_exists($item, $arr2)) {
                $res[$item] = 'deleted';
            } else {
                if ($arr1[$item] === $arr2[$item]) {
                    $res[$item] = 'unchanged';
                } else {
                    $res[$item] = 'changed';
                }
            }
        }
    }

    return $res;
}

$result = genDiff(
    ['one' => 'eon', 'two' => 'two', 'four' => true],
    ['two' => 'own', 'zero' => 4, 'four' => true]
);

echo '<pre>';
print_r($result);
echo '</pre>';
*/

# lesson 6 Деструктуризация
/*
function getSortedNames(array $users): array
{
    $res = [];

    foreach ($users as ['name' => $name]) {
        $res[] = $name;
    }

    sort($res);

    return $res;
}

$users = [
    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
    ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03']
];

getSortedNames($users);
*/

# lesson 7 Хеш таблицы

/*
function getIndex($key)
{
    return crc32($key) % 1000;
}

function make()
{
    return [];
}

function hasCollision($map, $key)
{
    $index = getIndex($key);
    [$currentKey] = $map[$index];
    return $currentKey !== $key;
}

function set(&$map, $key, $value)
{
    $index = getIndex($key);
    if (isset($map[$index]) && hasCollision($map, $key)) {
        return false;
    }
    $map[$index] = [$key, $value];
    return true;
}

function get($map, $key, $default = null)
{
    $index = getIndex($key);
    if (!isset($map[$index]) || hasCollision($map, $key)) {
        return $default;
    }
    [, $value] = $map[$index];
    return $value;
}

$map = make();
set($map, 'key2', 'value2');
set($map, 'key3', 'value3');

$res = get($map, 'key2');


echo '<pre>';
print_r($map);
echo '</pre>';

var_dump($res);
*/

# lesson 8

/*
function buildQueryString(array $params)
{
    $queryString = '';
    $currentParams = $params;
    ksort($currentParams);
    echo '<pre>';
    print_r($currentParams);
    echo '</pre>';

    foreach ($currentParams as $key => $value) {
        $queryString .= $key.'='.$value.'&';
    }

    return substr($queryString, 0, -1);
}
*/







/////////////////////////////////////////////////////////////////////////////////////////////
///
/// Испытания

# 1 Массив массивов
/*
function fromPairs(array $arr): array
{
    $res = [];
    foreach ($arr as [$key, $value]) {
        $res[$key] = $value;
    }

    return $res;
}

fromPairs([['fred', 30], ['barney', 40]]);
*/

# 2 Детектирование

//сам не сделал.

//teacher's solution

function findWhere($data, $where)
{
    foreach ($data as $item) {
        $find = true;
        foreach ($where as $key => $value) {
            if ($item[$key] !== $value) {
                $find = false;
            }
        }
        if ($find) {
            return $item;
        }
    }
}

$a = [
        ['title' => 'Book of Fooos', 'author' => 'FooBar', 'year' => 1111],
        ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611],
        ['title' => 'The Tempest', 'author' => 'Shakespeare', 'year' => 1611],
        ['title' => 'Book of Foos Barrrs', 'author' => 'FooBar', 'year' => 2222],
        ['title' => 'Still foooing', 'author' => 'FooBar', 'year' => 3333],
        ['title' => 'Happy Foo', 'author' => 'FooBar', 'year' => 4444],
    ];
findWhere(
    $a,
    ['author' => 'Shakespeare', 'year' => 1611]
); // ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611]


# lesson 3 Преобразование DNA в RNA

/*
function toRna(string $str)
{
    $res = '';

    for ($i = 0; $i < strlen($str); $i += 1) {
        $currentLetter = $str[$i];
        switch ($currentLetter) {
            case 'G':
                $res .= 'C';
                break;
            case 'C':
                $res .= 'G';
                break;
            case 'T':
                $res .= 'A';
                break;
            case 'A':
                $res .= 'U';
                break;
        }
    }

    return $res;
}

// teacher's solution
function toRnaHex($nucleotide)
{
    $map = [
        'G' => 'C', 'C' => 'G', 'T' => 'A', 'A' => 'U',
    ];

    $res = [];

    for ($i = 0; $i < strlen($nucleotide); $i += 1) {
        $res[] = $map[$nucleotide[$i]];
    }

    return implode('', $res);
}

$a = toRnaHex('ACGTGGTCTTAA');
*/

# 5	Скрэббл

/*
function scrabble(string $str, string $word)
{
    $lowerStr = strtolower($str);
    $lowerWord = strtolower($word);

    $arr = (str_split($lowerStr));
    $word = (str_split($lowerWord));

    if (count($arr) < count($word)) {
        return false;
    }

    for ($i = 0; $i < count($word); $i += 1) {
        if (! in_array($word[$i], $arr)) {
            return false;
        } else {
            $indexToRemove = array_search($word[$i], $arr);
            unset($arr[$indexToRemove]);
        }
    }

    return true;
}

$a = scrabble('scriptingjava', 'JavaScript'); //false
var_dump($a);

// teacher's solution
function countByChars($str)
{
    $symbols = str_split($str);
    return array_count_values($symbols);
}

function scrabbleHex($str, $word)
{
    $charsStr = countByChars($str); // массив символов строки ключ это буква, значение - сколько раз эта буква встречается в переданой строке.
    $charsWord = countByChars(mb_strtolower($word));
    foreach ($charsWord as $char => $count) {
        if (!array_key_exists($char, $charsStr)) {
            return false;
        }
        if ($charsStr[$char] < $count) {
            return false;
        }
    }
    return true;
}

$a = scrabbleHex('scriptingjava', 'JavaScript');
*/

# 6 Слияние словарей

/*
function combine(array ...$arr)
{
    $res = [];
    foreach ($arr as $item) {
        foreach ($item as $key => $value) {
            if (! array_key_exists($key, $res)) {
                $res[$key][] = $value;
            } else {
                if (! in_array($value, $res[$key])) {
                    $res[$key][] = $value;
                }
            }
        }
    }

    return $res;
}

combine(
    [ 'a' => 1, 'b' => 2, 'c' => 3 ],
    [],
    [ 'a' => 3, 'b' => 2, 'd' => 5],
    [ 'a' => 6 ],
    [ 'b' => 4, 'c' => 3, 'd' => 2 ],
    [ 'e' => 9 ],
);
*/

