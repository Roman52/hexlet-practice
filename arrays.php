<?php
//https://ru.hexlet.io/courses/php-arrays - PHP: массивы курс.

# lesson 2

//function apply(array $arr, string $operationName, int $index = null, string $value = null): array
//{
//    if ($operationName === 'reset') {
//        $arr = [];
//    } elseif ($operationName === 'remove') {
//        unset($arr[$index]);
//    } elseif ($operationName === 'change') {
//        $arr[$index] = $value;
//    }
//
//    return $arr;
//}

//$cities = ['moscow', 'london', 'berlin', 'porto'];

//echo '<pre>';
//var_dump(apply($cities, 'change', 3, 'new_one'));
//echo '</pre>';

# lesson 3

//function get(array $arr, int $index, string $default = null)
//{
//    return array_key_exists($index, $arr) ? $arr[$index] : $default;
//}
//
//$cities = ['moscow', 'london', 'berlin', 'porto', null];

//$res = get($cities, 22, 'aaa'); // london
//var_dump($res);

# lesson 4

/*
 * это так, я отвлекся на задачку из теории
 * А что, если нам нужно вывести значения массива в обратном порядке? Для этого есть два способа. Один — идти в прямом порядке, то есть от нулевого индекса до последнего, и каждый раз вычислять нужный индекс по такой формуле размер массива - 1 - текущее значение счётчика.

Но есть и другой способ. Можно просто идти от верхней границы к нижней. В такой ситуации код меняется на следующий:
 */

/*
$userNames = ['petya', 'vasya', 'evgeny'];

// вывод в прямом обычном порядке
for ($i = 0; $i < count($userNames); $i++) {
    print_r("{$userNames[$i]}\n");
}

echo '<hr>';

// вывод в обратном порядке вариант 1
for ($i = 0; $i < count($userNames); $i++) {
    $a = count($userNames) - 1 - $i;
    print_r($userNames[$a] . ' ');
}

echo '<hr>';

// вывод в обратном поряде вариант 2
for ($i = count($userNames) - 1; $i >= 0; $i--) {
    print_r($userNames[$i] . ' ');
}
*/

/*
 * еализуйте функцию addPrefix, которая добавляет к каждому элементу массива переданный префикс и возвращает получившийся массив. Функция предназначена для работы со строковыми элементами. Аргументы:
Массив
Префикс
После префикса автоматически добавляется пробел.

$names = ['john', 'smith', 'karl'];

$newNames = addPrefix($names, 'Mr');
print_r($newNames);
// => ['Mr john', 'Mr smith', 'Mr karl'];

не меняйте исходный массив
 */
function addPrefix(array $arr, string $prefix = null): array
{
    $newArr = [];
    foreach ($arr as $key => $value) {
        $newArr[$key] = $prefix.' '.$arr[$key];
    }

    return $newArr;
}

$names = ['john', 'smith', 'karl'];

print_r(addPrefix($names, 'Mr'));







