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

function countUniqChars(string $str)
{
    if ($str === '') {
        return 0;
    }

    $res = [];
    $coll = str_split($str);
    foreach ($coll as $item) {
        if (! in_array($item, $res, true) && in_array($item, $coll, true)) {
            $res[] = $item;
        }
    }

    return count($res);
}

$text1 = '';
$a = countUniqChars($text1);

var_dump($a);
