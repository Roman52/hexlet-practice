<?php
# 4
//function isPalindrome($str)
//{
//    $strLen = strlen($str);
//    $indexReversed = $strLen - 1;
//    for ($index = 0; $index < $strLen; $index++) {
//
//        if ($str[$index] !== $str[$indexReversed]) {
//            return false;
//        }
//
//        $indexReversed--;
//    }
//
//    return true;
//}
//
//var_dump(isPalindrome('aashgkhdj'));

# 5

//function generateError()
//{
//    helloWorld();
//}
//
//generateError();

# 6
//function reverse($str)
//{
//    $index = strlen($str) - 1;
//    $reversedString = '';
//
//    while ($index >= 0) {
//        $currentChar = $str[$index];
//        $reversedString = "{$reversedString}{$currentChar}";
//        $index = $index - 1;
//    }
//
//    return $reversedString;
//}
//
//function isPalindrome(string $word)
//{
//    $wordReversed = reverse($word);
//
//    if ($word === $wordReversed) {
//        return true;
//    }
//
//    return false;
//}
//
//var_dump(isPalindrome('radar'));

# 10

//function reverse(int $number): int
//{
//    $str = (string) $number;
//    $res = (int) strrev($str);
//
//    if ($str[0] === '-') {
//        $res = '-' . $res;
//    }
//
//    return $res;
//}
//
//print_r(reverse(123));
//Пока еще раз не посмотрел теорию и не прочитал несколько раз строчку "В этом примере, сама функция декларирует, что ее аргумент передается по ссылке.".
//Решение оказалось простейшим. Просто обратите внимание на & в аргументах функции, между типом и переменной. Надеюсь другим помог.
//# 11
//function swap(&$a, &$b)
//{
//    $c = $a;
//    $a = $b;
//    $b = $c;
//}
//
//$a = 5;
//$b = 8;
//
//swap($a, $b);

//print_r($a);
//echo '<br>';
//print_r($b);





# exercises for php foundations

# 01 Сумма двоичных чисел. Done

//function binarySum(string $num1, string $num2): string
//{
//    return $res = decbin((int) (bindec($num1) + bindec($num2)));
//}
//
//print_r(binarySum('10', '1'));

# 02 степень тройки. Done
//function isPowerOfThree(int $num): bool
//{
//    if ($num === 0) {
//        return true;
//    }
//
//    while ($num % 3 === 0) {
//        $num = $num / 3;
//    }
//
//    if ($num === 1) {
//        return true;
//    } else {
//        return false;
//    }
//}
//
//$i = 1;
//while ($i < 100000) {
//    if (isPowerOfThree($i)) echo $i . '<br>';
//    $i++;
//}

# 03 Фибаначи - done, но я подсмотрел решение в комментариях, сам не разобрался.

//function fib($num)
//{
//    if ($num < 2) {
//        return $num;
//    } else {
//        return fib($num - 1) + fib($num - 2);
//    }
//}
//
//print_r(fib(4));

//числа Фибоначи: 0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 987

# 04 добавляем цифры - рекурсия. Done
//(здесь я использую Итеративный процесс рекурсии.)

//function addDigits(int $num): int
//{
//    $str = (string) $num;
//    $strLen = strlen($str);
//
//    if ($strLen === 1) {
//        return $num;
//    }
//
//    $i = 0;
//    $sum = 0;
//    while ($i < $strLen) {
//        if ($strLen > 1) {
//            $sum = $sum + $str[$i];
//        }
//        $i++;
//    }
//
//    $sumLen = (string) strlen($sum);
//    if ($sumLen > 1) {
//        return addDigits($sum);
/*в данном случае нужно написать именно return и вызов функции - на сколько я понял чтобы результат возвращался в предыдущую итеракцию рекурсии. Если этого не сделать, то блок иначе ниже return $sum - возвращает null. (это помому что не вернули результат в предыдушую итерацию рекурсии - на сколько я понимаю)
*/
//} else {
//    return $sum;
//}
//}
//
//var_dump(addDigits(9));

# 05 Сбалансированные скобки - сделано, но слишком заморочно походу я сделал.
//function isBalanced(string $str): bool
//{
//    $str = str_replace(' ', '', $str); // удалить пробелы между скобками
//
//    if ($str === '') {
//        return true;
//    }
//
//    if (preg_match('[\)\(]', $str) && ! preg_match('[\(\)\(\)]', $str)) {
//        return false;
//    }
//
//    if (! substr_count($str, '(') || ! substr_count($str, ')')) {
        // если скобок в строке вообще нет (передали какую то строку с текстом)
        //return false;
    //} else {
    //    return substr_count($str, '(') === substr_count($str, ')');
    //}
//}

//var_dump(isBalanced('('));

# 06 Совершенное число
//2 28 496 8121 - это примеры совершенных чисел
// Если проверять число 8 589 869 056 - то php уже падает в ошибку памяти - Fatal error: Maximum execution time of 30 seconds - а так работает вроде. Написал сам, не подглядывал.

//function isPerfect(int $num): bool
//{
//    $i = $num - 1;
//    $sum = 0;
//    while ($i > 0) {
//        if (! is_float($num / $i)) {
//            $sum = $sum + $i;
//        }
//
//        $i--;
//    }
//
//    if ($sum === $num) {
//        return true;
//    }
//
//    return false;
//}

//var_dump(isPerfect(85));

# 07 Счастливый билет - сделано. Сам. Не подглядывал.
//function isHappy(string $str): bool
//{
//    $strLen = strlen($str);
//    $partLen = strlen($str) / 2;
//    $sum1 = 0;
//    $sum2 = 0;
//
//    if ($strLen % 2 !== 0) {
//        return false;
//    }
//
//    for ($i = 0; $i < $strLen; $i++) {
//        if ($i < $partLen) {
//            $sum1 = $sum1 + (int) $str[$i];
//        }
//        if ($i >= $partLen) {
//            $sum2 = $sum2 + (int) $str[$i];
//        }
//    }
//
//    return $sum1 === $sum2;
//}

//var_dump(isHappy('06'));

# 08 Физбазз - простая задача, но видимо я сделал слишком не элегантно, надо будет сравнить с решением учителя.

//function fizzBuzz(int $begin, int $end)
//{
//    if ($begin > $end) {
//        return false;
//    }
//
//    for ($i = $begin; $i <= $end; $i++) {
//        if ($i % 3 === 0 && $i % 5 === 0) {
//            $str = 'FizzBuzz';
//        } elseif ($i % 5 === 0) {
//            $str = 'Buzz';
//        } elseif ($i % 3 === 0) {
//            $str = 'Fizz';
//        } else {
//            $str = $i;
//        }
//
//        print_r($str.' ');
//    }
//}

//fizzBuzz(11, 20);

//function getPresent(string $predictScore, string $realScore) {
//
//}

//getPresent('1-2', '2-1');
//







