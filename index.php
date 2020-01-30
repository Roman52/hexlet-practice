<?php
# 62

//function isArgumentsForSubstrCorrect($str, $index, $length) {
//	$strLength = strlen($str);
//	$lastElementIndex = $strLength - 1;
//
	//return !( $length < 0 || $index < 0 || $index > $lastElementIndex || ($index + $length) > $strLength );
//}
//
//$str = 'Sansa Stark';
//
//
//var_dump( isArgumentsForSubstrCorrect($str, -1, 5) );

// isArgumentsForSubstrCorrect($str, -1, 3);  // false
// isArgumentsForSubstrCorrect($str, 4, 100); // false
// isArgumentsForSubstrCorrect($str, 10, 10); // false
// isArgumentsForSubstrCorrect($str, 11, 1);  // false
// isArgumentsForSubstrCorrect($str, 3, 3);   // true
// isArgumentsForSubstrCorrect($str, 0, 5);   // true



# 64

//function getEvenNumbersUpTo($num)
//{
//	$counter = 1;
//	$result = '';
//
//	$numEven = false;
//	if ($num % 2 === 0) {
//		$numEven = true;
//	}
//
//	while ($counter <= $num) {
//		if ($counter % 2 === 0) {
//			$result = $result . $counter;
//
//			if ($numEven) {
//				if ($counter === $num) {
//					$result .= '.';
//				} else {
//					$result .= ',';
//				}
//			} else {
//				if ($counter === $num - 1) {
//					$result .= '.';
//				} else {
//					$result .= ',';
//				}
//			}
//		}
//
//		$counter += 1;
//	}
//
//	return $result;
//}
//
//print_r(getEvenNumbersUpTo(11));

# 65
//function filterString($str, $char) {
//	$strLen = strlen($str);
//	var_dump($)
//}
//
//$str = 'If I look back I am lost';
//echo filterString($str, 'I'); // => 'f  look back am lost'
//echo filterString($str, 'o'); // => 'If I lk back I am lst'

# 66
//function filterString($str, $char) {
//	$strLen = strlen($str);
//	$i = 0;
//	$result = '';
//
//	while ($i < $strLen) {
//		if ($str[$i] !== $char) {
//			$result .= $str[$i];
//		}
//
//		$i++;
//	}
//
//	return $result;
//}
//
//$str = 'If I look back I am lost';
//filterString($str, 'I'); // => 'f  look back am lost'
//echo filterString($str, 'o'); // => 'If I lk back I am lst'

# 67

//function doesContain($str, $char) {
//	$strLen = strlen($str);
//	$index = 0;
//
//	while ($index < $strLen) {
//		if ($str[$index] === $char) {
//			return true;
//		}
//
//		$index++;
//	}
//
//	return false;
//
//}
//
//var_dump(doesContain('Renly', 'z'));

# 68
//function sumOfSeries($num1, $num2) {
//	$result = 0;
//
//	for ($num1; $num1 <= $num2; $num1++) {
//
//		$result = $result + $num1;
//	}
//
//	return $result;
//}
//
//sumOfSeries(1, 1);

# 69

//function invertCase($text) {
//	$strLen = mb_strlen($text);
//	$result = '';
//
//	for ($i = 0; $i < $strLen; $i++) {
//		$char = mb_substr($text, $i, 1);
//		if ( mb_strtoupper($char) === $char ) {
//			$result .= mb_strtolower($char);
//		} else {
//			$result .= mb_strtoupper($char);
//		}
//	}
//
//	return $result;
//}
//
//$str = 'ПрИвЕт!';
//invertCase($str); // пРиВеТ!

# 70 setlocate
//print_r(setlocale(LC_CTYPE, 0));

# 71

//function startsWith($text, $substr) {
//	if ( mb_strpos($text, $substr) === 0 ) {
//		return true;
//	}
//	else {
//		return false;
//	}
//}
//
//var_dump(startsWith('Баратеон', 'Бар') );

# 72
//const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;
//function getYear($timestamp) {
//
//	return 1970 + floor($timestamp / SECONDS_IN_YEAR );
//}
//
//print_r(getYear(time()));

# 73
//function getCustomDate($timestamp) {
//	return date('d/m/Y', $timestamp);
//}
//
//getCustomDate(1532435204);

# 74
//function getHexletBirthday() {
//	return ( mktime(0, 0, 0, 1, 1, 2012) );
//}
//
//getHexletBirthday();

# 75
//var_dump(date_default_timezone_get());


print_r("- Are you hungry?\n- Aaaarrrgh!");