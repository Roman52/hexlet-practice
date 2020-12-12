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
 * Реализуйте функцию addPrefix, которая добавляет к каждому элементу массива переданный префикс и возвращает получившийся массив. Функция предназначена для работы со строковыми элементами. Аргументы:
Массив
Префикс
После префикса автоматически добавляется пробел.

$names = ['john', 'smith', 'karl'];

$newNames = addPrefix($names, 'Mr');
print_r($newNames);
// => ['Mr john', 'Mr smith', 'Mr karl'];

не меняйте исходный массив
 */
//function addPrefix(array $arr, string $prefix = null): array
//{
//    $newArr = [];
//    foreach ($arr as $key => $value) {
//        $newArr[$key] = $prefix.' '.$arr[$key];
//    }
//
//    return $newArr;
//}
//
//$names = ['john', 'smith', 'karl'];
//
//print_r(addPrefix($names, 'Mr'));

# lesson 5

/*
 * Реализуем функцию reverse, которая располагает значения в обратном порядке без создания нового массива. Хотя вариант с созданием нового массива предпочтительнее с точки зрения простоты и поддерживаемости кода, вариант без создания нового массива полезен для более полного понимания работы алгоритмов.

Алгоритм работы следующий: достаточно менять местами элементы, стоящие зеркально относительно центра.

Первое, с чем нужно разобраться в данном алгоритме — до какого индекса двигаться, производя обмен. Достаточно очевидно, что это середина массива, но что делать, если в массиве нечётное количество элементов? В такой ситуации после реверса центральный элемент останется на своём месте, а значит, что при нечётном числе элементов можно округлять результат деления до нижней границы. То есть, если в массиве 5 элементов, то нужно 5 поделить на 2 и округлить до ближайшего числа снизу, то есть до 2. В PHP для округления вниз есть встроенная функция floor. Соответственно само вычисление выглядит так floor(count($coll) / 2);. Этот код работает универсально для массивов с чётным и нечётным числом элементов.

Внутри тела цикла происходит самое интересное. Нам нужно поменять два значения местами. Если попытаться сразу одному значению присвоить другое, то мы потеряем исходное значение. Поэтому, предварительно нужно сохранить значение во временную переменную $temp = $coll[$i];. Затем происходит вычисление индекса, находящегося на зеркальной позиции, и последующий обмен значениями.

Введение временной переменной для промежуточного хранения результата — распространённый приём в алгоритмических задачах, который помогает выполнять обмен значениями.
 */

//function reverseArray($array)
//{
//    $size = count($array); // array size
//    $maxIndex = floor($size / 2);
//
//    for ($i = 0; $i < $maxIndex; $i++) {
//        $mirrorIndex = $size - $i - 1;
//        $temp = $array[$i];
//        $array[$i] = $array[$mirrorIndex];
//        $array[$mirrorIndex] = $temp;
//    }
//
//    return $array;
//}
//
//$arr = ['one', 'two', 'three', 'four'];
//
//reverseArray($arr);

/*
 * Реализуйте функцию swap, которая меняет местами два элемента относительно переданного индекса. Например, если передан индекс 5, то функция меняет местами элементы, находящиеся по индексам 4 и 6.
Параметры функции:
Массив
Индекс
Если хотя бы одного из индексов не существует, функция возвращает исходный массив.

$names = ['john', 'smith', 'karl'];

$result = swap($names, 1);
print_r($result); // => ['karl', 'smith', 'john']

$result = swap($names, 2);
print_r($result); // => ['john', 'smith', 'karl']

$result = swap($names, 0);
print_r($result); // => ['john', 'smith', 'karl']

<?php
 */
//:array
//function swap(array $array, int $index): array
//{
//    if (array_key_exists($index + 1, $array) && $index > 0) {
//        $temp = $array[$index - 1];
//        $array[$index - 1] = $array[$index + 1];
//        $array[$index + 1] = $temp;
//    }
//
//    return $array;
//}
//
//$arr = ['john', 'smith', 'karl'];
//
//echo '<pre>';
//print_r(swap($arr, 1));
//echo '</pre>';


# lesson 6
//function isContinuousSequence(array $array): bool
//{
//    if (count($array) < 2) {
//        return false;
//    }
//
//    $arrayLength = count($array);
//
//    for ($i = 0; $i < $arrayLength; $i++) {
//        if (array_key_exists($i + 1, $array)) {
//            if ($array[$i] + 1 !== $array[$i + 1]) {
//                return false;
//            }
//        }
//    }
//
//    return true;
//}
//
//var_dump(isContinuousSequence([4, 6, 7]));

# lesson 7

//function calculateAverage(array $array)
//{
//    if (empty($array)) {
//        return null;
//    }
//
//    $sum = 0;
//    $arrayLenght = sizeof($array);
//    foreach ($array as $item) {
//        $sum += $item;
//    }
//
//    return $sum / $arrayLenght;
//}
//
//$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5];
//
//$res = calculateAverage($temperatures);
//var_dump($res);

# lesson 8
//:int
//function getTotalAmount(array $array, string $currency): int
//{
//    $amount = 0;
//
//    foreach ($array as $item) {
//        if ($currency !== substr($item, 0, 3)) {
//            continue;
//        }
//        $amount += (int) substr($item, 4);
//    }
//
//    return $amount;
//}

//$money1 = ['eur 10', 'usd 1', 'usd 10', 'rub 50', 'usd 5'];
//$money2 = ['eur 10', 'usd 1', 'eur 5', 'rub 100', 'eur 20', 'eur 100', 'rub 200'];
//$money3 = ['eur 10', 'rub 50', 'eur 5', 'rub 10', 'rub 10', 'eur 100', 'rub 200'];
//
//$res = getTotalAmount($money3, 'rub'); // 16
//
//var_dump($res);

# lesson 9
//:array
//function getSameParity(array $array): array
//{
//    if (empty($array)) {
//        return $array;
//    }
//
//    $result = [];
//
//    $firstItem = $array[0] % 2;
//
//    foreach ($array as $item) {
//        if ($firstItem === $item % 2) {
//            $result[] = $item;
//        }
//    }
//
//    return $result;
//}
//
//$res = getSameParity([1, 2, 8]);
//
//echo '<pre>';
//print_r($res);
//echo '</pre>';

# lesson 10
//function getSuperSeriesWinner(array $scores)
//{
//    $canadaIsWinner = 0;
//    $ussrIsWinner = 0;
//
//    foreach ($scores as $score) {
//        if ($score[0] === $score[1]) {
//            continue;
//        }
//
//        if ($score[0] > $score[1]) {
//            $canadaIsWinner += 1;
//        } else {
//            $ussrIsWinner += 1;
//        }
//    }
//
//    if ($canadaIsWinner === $ussrIsWinner) {
//        return null;
//    }
//
//    $res = ($canadaIsWinner > $ussrIsWinner) ? 'canada' : 'ussr';
//
//    return $res;
//}

// Первое число – сколько забила Канада
// Второе число – сколько забила СССР
//$scores = [
//    [3, 7], // ussr
//    [4, 1], // canada
//    [4, 4], //
//    [3, 5], // ussr
//    [4, 5], // ussr
//    [3, 2], // canada
//    [4, 3], // canada
//    [6, 5], // canada
//];
//
//$a = getSuperSeriesWinner($scores);
//
//var_dump($a);

# lesson 11
//:string
//function buildDefinitionList(array $array): string
//{
//    if (empty($array)) {
//        return '';
//    }
//
//    $res = [];
//    foreach ($array as $item) {
//        $res[] = "<dt>{$item[0]}</dt><dd>{$item[1]}</dd>";
//    }
//
//    $strRes = implode('', $res);
//
//    return "<dl>{$strRes}</dl>";
//}
//
//$definitions = [
//    ['Блямба', 'Выпуклость, утолщения на поверхности чего-либо'],
//    ['Бобр', 'Животное из отряда грызунов'],
//];
//
//$a = buildDefinitionList($definitions);

//echo '<pre>';
//print_r($a);
//echo '</pre>';

//echo '<dl><dt>Блямба</dt><dd>Выпуклость, утолщение на поверхности чего-либо</dd><dt>Бобр</dt><dd>Животное из отряда грызунов</dd></dl>';

# lesson 12

//function makeCensored(string $text, array $stopWords)
//{
//    $arrayText = explode(' ', $text);

    //вариант 1
    //foreach ($stopWords as $stopWord) {
    //    if (in_array($stopWord, $arrayText)) {
    //        foreach ($arrayText as $key => $value) {
    //            if ($stopWord === $value) {
    //                $arrayText[$key] = '$#%!';
    //            }
    //        }
    //    }
    //}

    //$res = implode(' ', $arrayText);
    //return $res;


    //вариант 2

    //$res = [];
    //foreach ($arrayText as $item) {
    //    if (in_array($item, $stopWords)) {
    //        $res[] = '$#%!';
    //    } else {
    //        $res[] = $item;
    //    }
    //}
    //
    //return implode(' ', $res);
//}

# teacher's solution
//function makeCensored(string $text, array $stopWords)
//{
//    $words = explode(' ', $text);
//    $result = [];
//    foreach ($words as $word) {
//        $result[] = in_array($word, $stopWords) ? '$#%!' : $word;
//    }
//
//    return implode(' ', $result);
//}

//$sentence = 'When you play the game of thrones, you win or you die ?';
//$a = makeCensored($sentence, ['die', 'play']);

//echo '<pre>';
//print_r($a);
//echo '</pre>';

# lesson 13
//:int
//function getSameCount(array $arr1, array $arr2): int
//{
//    $res = [];
//    foreach ($arr1 as $item) {
//        if (! in_array($item, $res, true) && in_array($item, $arr2, true)) {
//            $res[] = $item;
//        }
//    }
//
//    return count($res);
//}
//
//var_dump(getSameCount([0], ['one', 'two']));

# lesson 14

//function countUniqChars(string $str)
//{
//    if ($str === '') {
//        return 0;
//    }
//
//    $res = [];
//    $coll = str_split($str);
//    foreach ($coll as $item) {
//        if (! in_array($item, $res, true) && in_array($item, $coll, true)) {
//            $res[] = $item;
//        }
//    }
//
//    return count($res);
//}
//
//$text1 = '';
//$a = countUniqChars($text1);
//
//var_dump($a);

# lesson 15

/*
function bubbleSort($arr)
{
    $size = count($arr);
    // do..while цикл. Работает почти идентично while
    // Разница в проверке. Тут она делается не до выполнения тела, а после.
    // Такой цикл полезен там, где надо выполнить тело хотя бы раз в любом случае.
    do {
        // Объявляем переменную swapped, значение которой показывает был ли
        // совершен обмен элементов во время перебора массива
        $swapped = false;
        // Перебираем массив и меняем местами элементы, если предыдущий
        // больше, чем следующий
        for ($i = 0; $i < $size - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                // temp – временная переменная для хранения текущего элемента
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
                // Если сработал if и была совершена перестановка,
                // присваиваем swapped значение true
                $swapped = true;
            }
        }
        // Уменьшаем счетчик на 1, т.к. самый большой элемент уже находится
        // в конце массива
        $size--;
    } while ($swapped); // продолжаем, пока swapped === true

    return $arr;
}
*/

//echo '<pre>';
//print_r([0, 2, 10, -2, 0, 44, -34443, -23]);
//echo '</pre>';
//
//$res = bubbleSort([3, 2, 10, -2, 0]);
//
//echo '<hr>';
//
//echo '<pre>';
//print_r($res);
//echo '</pre>';

# lesson 17

/*
function checkIfBalanced($expression)
{
    $stack = [];
    $startSymbols = ['{', '(', '<', '['];
    $pairs = ['{}', '()', '<>', '[]'];

    for ($i = 0, $len = strlen($expression); $i < $len; $i++) {
        $curr = $expression[$i];
        if (in_array($curr, $startSymbols)) {
            array_push($stack, $curr);
        } else {
            $prev = array_pop($stack);
            $pair = "{$prev}{$curr}";
            if (!in_array($pair, $pairs)) {
                return false;
            }
        };
    }

    return count($stack) === 0;
}

var_dump(checkIfBalanced('[')); // => bool(false)
//var_dump(checkIfBalanced('}{')); // => bool(false)
//var_dump(checkIfBalanced('(([<>]){})')); // => bool(true)
//var_dump(checkIfBalanced('([{]})')); // => bool(false)
*/

//Реализуйте функцию checkIfBalanced, которая проверяет балансировку круглых скобок в арифметических выражениях.

//function checkIfBalanced($expression)
//{
//    $stack = [];
//    $startSymbol = '(';
//    $endSymbol = ')';
//
//    for ($i = 0; $i < strlen($expression); $i++) {
//        $curr = $expression[$i];
//        if ($curr === $startSymbol) {
//            array_push($stack, $curr);
//        }
//        if ($curr === $endSymbol) {
//            $prev = array_pop($stack);
//
//            if ($prev !== $startSymbol) {
//                return false;
//            }
//        }
//    }
//
//    return count($stack) === 0;
//}
//
//$res = checkIfBalanced('(5 + 6) * (7 + 8)/(4 + 3)'); // true
//var_dump($res);
//$res1 = checkIfBalanced('(4 + 3))'); // false
//var_dump($res1);

# lesson 18
//:array
// Roman's solution
//function getIntersectionOfSortedArray(array $arr1, array $arr2)
//{
//    $res = [];
//
//    foreach ($arr1 as $key1 => $value1) {
//        foreach ($arr2 as $key2 => $value2) {
//            if ($value1 === $value2) {
//                $res[] = $value2;
//                break;
//            }
//        }
//    }
//
//    return $res;
//}

//function getIntersectionOfSortedArray(array $arr1, array $arr2)
//{
//    $size1 = count($arr1);
//    $size2 = count($arr2);
//
//    $i1 = 0;
//    $i2 = 0;
//    $result = [];
//
//    while ($i1 < $size1 && $i2 < $size2) {
//        if ($arr1[$i1] === $arr2[$i2]) {
//            $result[] = $arr1[$i1];
//            $i1++;
//            $i2++;
//        } elseif ($arr1[$i1] > $arr2[$i2]) {
//            $i2++;
//        } else {
//            $i1++;
//        }
//    }
//
//    return $result;
//}
//
//$res = getIntersectionOfSortedArray([10, 11, 24], [10, 10, 13, 14, 18, 24, 30]);
//
//var_dump($res);

# lesson 19

//[, $secondElement, ,$fourthElement, $fifthElement] = [1, 2, 3, 4, 5, 6];
//
//print_r($secondElement); // => 2
//print_r($fourthElement); // => 4
//print_r($fifthElement);  // => 5

/*
 *
 * это мое решение используя индексы массива. (Сначала не допер как делать используя деструктуризацию)
 *
function getDistance(array $point1, array $point2)
{
    [$x1, $y1] = $point1;
    [$x2, $y2] = $point2;

    $xs = $x2 - $x1;
    $ys = $y2 - $y1;

    return sqrt($xs ** 2 + $ys ** 2);
}
*/

/*
function getTheNearestLocation(array $locations, array $point)
{
    if (empty($locations)) {
        return null;
    }

    $index = 0;
    for ($i = 0; $i < count($locations); $i++) {

        if (! empty($locations[$i + 1])) {
            $currentDistance = getDistance($point, $locations[$i][1]);
            $nextDistance = getDistance($point, $locations[$i + 1][1]);

            if ($currentDistance > $nextDistance) {
                $index = $i + 1;
            }
        }
    }

    return $locations[$index];
}

$locations = [
    ['Park', [10, 5]],
    ['Sea', [1, 3]],
    ['Museum', [8, 4]],
];

//$currentPoint = [5, 5];
//$res = getTheNearestLocation($locations, $currentPoint);

//var_dump($res);



//-----------------------------------------------------------------------

//Потом вернулся к уроку и переделал используя деструктуризацию

/*
function getTheNearestLocation(array $locations, array $point)
{
    if (empty($locations)) {
        return null;
    }

    $res = 999999999;
    $nearestLocation = [];
    foreach ($locations as [$place, $coords]) {
        $distance = getDistance($coords, $point);

        if ($distance < $res) {
            $res = $distance;
            $nearestLocation = [$place, $coords];
        }
    }

    return $nearestLocation;
}

$locations = [
    ['Park', [10, 5]],
    ['Sea', [1, 3]],
    ['Museum', [8, 4]],
];

$currentPoint = [5, 5];

$a = getTheNearestLocation($locations, $currentPoint); // ['Museum', [8, 4]]
echo '<pre>';
print_r($a);
echo '</pre>';


*/
# teacher's solution
/*
function getTheNearestLocationHex(array $locations, array $currentPoint)
{
    if (count($locations) === 0) {
        return null;
    }
    
    [$nearestLocation] = $locations;
    [, $nearestPoint] = $nearestLocation;
    $lowestDistance = getDistance($currentPoint, $nearestPoint);

    foreach ($locations as $location) {
        [, $point] = $location;
        $distance = getDistance($currentPoint, $point);

        if ($distance < $lowestDistance) {
            $lowestDistance = $distance;
            $nearestLocation = $location;
        }
    }

    return $nearestLocation;
}

$locations = [
    ['Park', [10, 5]],
    ['Sea', [1, 3]],
    ['Museum', [8, 4]],
];

$currentPoint = [5, 5];

$a = getTheNearestLocationHex($locations, $currentPoint); // ['Museum', [8, 4]]
*/


# lesson 20

//function flatten(array $arr)
//{
//    $res = [];
//    foreach ($arr as $value) {
//        if (is_array($value)) {
//            $res = [...$res, ...$value];
//        } else {
//            $res[] = $value;
//        }
//    }
//
//    return $res;
//}
//
//$a = flatten([1, [[2], [3]], [9]]);











//----------------------------------------------------------------------------------------------
# Exercises for this Arrays course

# 1 Сумма интервалов

/*
//возвращает сумму всех длин интервалов
//Например, длина интервала [-100, 0] равна 100, а длина интервала [5, 5] равна 0. Пересекающиеся интервалы должны учитываться только один раз.
Пересекающиеся интервалы - это например:
[1, 9],
[7, 12],

1 - 9 и 7 - 12 - у них пересекающийся интервал это с 7 до 9, то есть нужно вычесть 2.


Что такое длина интервала? Это если из второго элемента массива вычесть первый и взять модуль этого числа.

[1, 5], = 4
[-10, 19], = 29
[1, 7], = 6
[16, 100], = 84
[5, 11] = 6

*/

/*
function sumIntervals(array $arr)
{
    if (! is_array($arr[0])) {
        return abs($arr[1] - $arr[0]);
    }

    $res = 0;
    $smallest = 0;
    $biggest = 0;

    for ($i = 0; $i < count($arr); $i += 1) {
        if ($i === 0) {
            $res += abs($arr[$i][1] - $arr[$i][0]);
            $smallest = $arr[$i][0];
            $biggest = $arr[$i][1];
        } else {

            $currentInterval = $arr[$i][1] - $arr[$i][0];

            if ($arr[$i][0] < $smallest) {
                if ($currentInterval >= abs($smallest - $arr[$i][0])) {
                    $res += abs($smallest - $arr[$i][0]);
                } else {
                    $res += $currentInterval;
                }

                $smallest = $arr[$i][0];
            }
            if ($arr[$i][1] > $biggest) {

                if ($currentInterval >= abs($biggest - $arr[$i][1])) {
                    $res += abs($biggest - $arr[$i][1]);
                } else {
                    $res += $currentInterval;
                }

                $biggest = $arr[$i][1];
            }
        }
    }

    return $res;
}
*/

//var_dump(sumIntervals([3,10]));
//var_dump(sumIntervals([-100,0]));

//var_dump(sumIntervals([
//    [1, 5],
//    [-10, 19],
//    [1, 7],
//    [16, 100],
//    [5, 11]
//]));

// teacher solution

/*
function sumIntervalsHex($intervals)
{
    $values = [];
    foreach ($intervals as [$start, $end]) {
        var_dump($start);
        var_dump($end);
        echo '<hr>';
        for ($i = $start; $i < $end; $i++) {
            $values[] = $i;
        }
    }
    $uniqValues = array_unique($values);
    return count($uniqValues);
}

var_dump(sumIntervalsHex([
    [1, 2],
    [11, 12],
]));
*/

# 2 Зеркалирование матрицы

//function getMirrorMatrix(array $arr)
//{
//    $result = [];
//    foreach ($arr as $item) {
//        $innerResult = [];
//        $itemCount = count($item);
//        $centerNum = $itemCount / 2;
//
//        for ($i = 1, $index = 0; $i <= $itemCount; $i++, $index++) {
//            if ($i > $centerNum) {
//                $item[$index] = $item[$itemCount - $i];
//            }
//
//            $innerResult[] = $item[$index];
//        }
//
//        $result[] = $innerResult;
//    }
//
//    return $result;
//}

/*
function getMirrorMatrix(array $array)
{
    $size = count($array);
    $mirrorArray = [];
    for ($i = 0; $i < $size; $i += 1) {
        for ($j = 0; $j < $size / 2; $j += 1) {
            $mirrorArray[$i][$j] = $array[$i][$j];
            $mirrorArray[$i][$size - $j - 1] = $array[$i][$j];
        }
    }

    return $mirrorArray;
}

$a = getMirrorMatrix([
    [11, 12, 13, 14],
    [21, 22, 23, 24],
    [31, 32, 33, 34],
    [41, 42, 43, 44],
]);

echo '<pre>';
print_r([
    [11, 12, 13, 14],
    [21, 22, 23, 24],
    [31, 32, 33, 34],
    [41, 42, 43, 44],
]);
echo '</pre>';
echo '<hr>';

echo '<pre>';
print_r($a);
echo '</pre>';

// → [
//     [11, 12, 12, 11],
//     [21, 22, 22, 21],
//     [31, 32, 32, 31],
//     [41, 42, 42, 41],
//   ]
*/


# 3  Список диапазонов
//  пока что не сделал

/*
function summaryRanges(array $arr)
{
    $res = [];
    $res1 = [];

    //&& ! empty($arr[$i - 1]

    for ($i = 0; $i < count($arr); $i += 1) {
        if (!empty($arr[$i + 1])) {
            if ($arr[$i] + 1 === $arr[$i + 1]) {
                $res[] = $arr[$i];
            }
            else {
                $res[] .= '';
                //if (!empty($arr[$i - 1])) {
                //    if ($arr[$i] - 1 === $arr[$i - 1]) {
                        //var_dump($arr[$i]);
                    //}
                //}
            }
        }
    }

    echo '<pre>';
    print_r($res);
    echo '</pre>';

    foreach ($res as $res_item) {

    }
}

$a = summaryRanges([0, 11, 3, 10, 11, 12, 13, 44, 55, -22, 0, 4, 5, 6, 7, 8, 11]);
//var_dump($a);

//[1, 2, 3]
// ["1->3"]
//[0, 1, 2, 4, 5, 7]
// ["0->2", "4->5"]
*/


# 4 Вес Хэмминга

/*
function hammingWeight(int $num)
{
    $binNumber = decbin($num);

    $res = 0;
    for ($i = 0; $i < strlen($binNumber); $i += 1) {
        if ((int) $binNumber[$i] === 1) {
            $res += 1;
        }
    }

    return $res;
}
*/

# 5 Умножение матриц
// не понял пока что задания

/*
function multiply(array $matrix1, array $matrix2)
{
    $res = [];

    foreach ($matrix1 as $item) {
        for ($j = 0, $i = 0; $j < 6; $i += 1, $j += 1) {
            
            //echo '<pre>';
            //print_r($item[$i]);
            //echo '</pre>';
            
            if ($i > 0) {
                $i = 0;
                $i -= 1;
            }
        }
        
        foreach ($matrix1 as [$item1, $item2]) {
            echo '<pre>';
            print_r($item1);
            echo '</pre>';
            
            echo '<pre>';
            print_r($item2);
            echo '</pre>';
        }
    }
}

//$matrixA = [[1, 2], [3, 2]];
//$matrixB = [[3, 2], [1, 1]];

$matrixA = [
    [2, 5],
    [6, 7],
    [1, 8],
];
$matrixB = [
    [1, 2, 1],
    [0, 1, 0],
];

$a = multiply($matrixA, $matrixB);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo '<hr>';
echo '<hr>';
echo '<hr>';

$abc = [2, 5];

for ($j = 0, $i = 0; $j < 10; $i += 1, $j += 1) {
    if ($i > 0) {
        $i = 0;
        $i -= 1;
    }
}
*/




# 6 Сравнение версий

/*
function compareVersion(string $version1, string $version2)
{
    $ver1 = explode('.', $version1);
    $ver2 = explode('.', $version2);

    if ((int) $ver1[0] === (int) $ver2[0]) {
        if ((int) $ver1[1] > (int) $ver2[1]) {
            return 1;
        } elseif ((int) $ver1[1] < (int) $ver2[1]) {
            return -1;
        } else {
            return 0;
        }
    } else {
        if ((int) $ver1[0] > (int) $ver2[0]) {
            return 1;
        } elseif ((int) $ver1[1] < (int) $ver2[1]) {
            return -1;
        } else {
            return 0;
        }
    }
}

$res = compareVersion("3.2", "2.12");
var_dump($res);
*/

# 7 Длина последнего слова

/*
function lengthOfLastWord(string $str)
{
    $words = explode(' ', rtrim($str));

    return strlen($words[count($words) - 1]);
}

$res = lengthOfLastWord('hello, wOrLD!  ');
var_dump($res);
*/

# 9 Обратная польская запись
// Не сделано
/*
function calcInPolishNotation(array $arr)
{
    $res = 0;
    $count = count($arr);

    for ($i = 0; $i < $count; $i += 1) {
        if (is_string($arr[$i])) {
            switch ($arr[$i]) {
                case '+':
                    $res = $arr[$i - 2] + $arr[$i - 1];
                    break;
                case '-':
                    $res = $arr[$i - 2] - $arr[$i - 1];
                    break;
                case '*':
                    $res = $arr[$i - 2] * $arr[$i - 1];
                    break;
                case '/':
                    $res = $arr[$i - 2] / $arr[$i - 1];
                    break;
            }

            unset($arr[$i - 2]);
            unset($arr[$i - 1]);
            $arr[$i] = $res;
        }
    }

    return $res;
}

$result = calcInPolishNotation([7, 2, 3, '*', '-']);
//$result = calcInPolishNotation([1, 2, '+', 4, '*', 3, '+']);
//var_dump($result);
//$result = calcInPolishNotation([1, 2, '+', 8]);
*/



# 10 Чанкование
/*
function getChunked(array $arr, int $cols): array
{
    $res = [];
    $res1 = [];
    $cols1 = $cols;

    for ($i = 0; $i < count($arr); $i += 1) {
        $res[] = $arr[$i];

        if ($i + 1 === $cols1) {
            $res[] = '';
            $cols1 += $cols;
        }
    }

    for ($k = 0, $j = 0; $j < count($res); $j += 1) {
        if ($res[$j] === '') {
            $k += 1;
            continue;
        }
        $res1[$k][] = $res[$j];
    }

    return $res1;
}

$result = getChunked(['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'], 5);

// teacher's solution

function getChunkedHex(array $array, int $size)
{
    $result = [];
    for ($i = 0, $length = count($array); $i < $length; $i += $size) {
        $result[] = array_slice($array, $i, $size);
    }

    return $result;
}

$resultHex = getChunkedHex(['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'], 5);
*/

# Вращение матрицы

/*
function rotateLeft(array $arr)
{
    $res = [];

    for ($j = 0; $j < count($arr); $j += 1) {
        for ($i = 0; $i < count($arr[$j]); $i += 1) {
            $res[$i][$j] = $arr[$j][$i];
        }
    }

    return array_reverse($res);
}

function rotateRight(array $arr)
{
    $res = [];

    for ($j = 0; $j < count($arr); $j += 1) {
        for ($i = 0; $i < count($arr[$j]); $i += 1) {
            $res[$i][$j] = $arr[$j][$i];
        }
    }

    for ($k = 0; $k < count($res); $k += 1) {
        $res[$k] = array_reverse($res[$k]);
    }

    return $res;
}

$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 0, 1, 2],
];

//$a = rotateLeft($matrix);
//echo '<pre>';
//print_r($a);
//echo '</pre>';

$a = rotateRight($matrix);
echo '<pre>';
print_r($a);
echo '</pre>';
*/

// teacher's solution
/*
function rotate($matrix, $direction)
{
    $rowsCount = count($matrix);
    [$firstRow] = $matrix;
    $columnsCount = count($firstRow);
    $rotatedMatrix = [];

    for ($i = 0; $i < $columnsCount; $i++) {
        for ($j = 0; $j < $rowsCount; $j++) {
            $rotatedMatrix[$i][$j] = ($direction === 'left')
                ? $matrix[$j][$columnsCount - $i - 1]
                : $matrix[$rowsCount - $j - 1][$i];
        }
    }

    return $rotatedMatrix;
}


function rotateLeft($matrix)
{
    return rotate($matrix, 'left');
}


function rotateRight($matrix)
{
    return rotate($matrix, 'right');
}

$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 0, 1, 2],
];

$a = rotateLeft($matrix);
echo '<pre>';
print_r($a);
echo '</pre>';
*/


