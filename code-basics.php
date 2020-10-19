<?php

//----------------------------------------------------------------------------------------------
// Здесь задачки для уроков с code-basics.ru    https://ru.code-basics.com/languages/php/
//----------------------------------------------------------------------------------------------

# String reverse / переворот строки
/*
function reverseString(string $url) {
    $i = 0;
    $res = '';

    while ($i < strlen($url)) {
        $res = $url[$i] . $res;
        $i++;
    }

    return $res;
}

echo '<pre>';
print_r(reverseString('123456'));
echo '</pre>';
*/


# 55 https://ru.code-basics.com/languages/php/modules/conditionals/lessons/if
/*
function getSentenceTone(string  $str) {
    if ($str === strtoupper($str)) {
        return 'scream';
    }

    return 'normal';
}

var_dump(getSentenceTone('HI'));
*/

# 56 https://ru.code-basics.com/languages/php/modules/conditionals/lessons/if-else
/*
function normalizeUrl(string $url) {
    if (substr($url, 0, 7) === 'http://') {
        return 'https://' . substr($url, 7);
    }

    return 'https://' . $url;
}

echo '<pre>';
print_r(normalizeUrl('http://site.com'));
echo '</pre>';
*/

# 58 https://ru.code-basics.com/languages/php/modules/conditionals/lessons/ternary-operator
/*
function convertString(string $str) {
    # variant 1
    return (strtolower($str[0]) === $str[0]) ? strrev($str) : $str;

    # variant 2
    if (strtolower($str[0]) === $str[0]) {
        return strrev($str);
    }

    return $str;
}

var_dump(convertString('hello!'));
*/

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


//echo "- Are you hungry?\n- Aaaarrrgh!";

// build menu
/*
$menu = [
    [
        'label' => 'Yii',
        'url' => 'url',
    ],
    [
        'label' => 'Yii1',
        'items' => [
            ['label' => 'Laravel', 'url' => 'url1'],
            ['label' => 'Slim', 'url' => 'url2'],
        ]
    ],
    [
        'label' => 'Simfony',
        'url' => 'url3',
    ],
];

function buildMenu(array $menu) {
    $html = '<ul>';
    foreach ($menu as $item) {
        $html .= '<li>';
        if (isset($item['url'])) {
            $html .= '<a href="' . $item['url'] . '">' . $item['label'] . '</a>';
        } else {
            $html .= '<span>' . $item['label'] . '</span>';
        }

        if (isset($item['items'])) {
            $html .= buildMenu($item['items']);
        }

        $html .= '</li>';
    }

    $html .= '</ul>';

    return $html;
}

//var_dump(buildMenu($menu));

echo '<pre>';
print_r(buildMenu($menu));
echo '</pre>';
*/

/*
echo '<ul>';
foreach ($menu as $key => $item) :
    echo '<li>';
        if (isset($item['url'])) :
            echo "<a href='{$item['url']}'>{$item['label']}</a>";
        else :
            echo "<span>{$item['label']}</span>";
        endif;

        if (isset($item['items'])) :
            echo '<ul class="sub-menu">';
                foreach ($item['items'] as $sub_item) :
                    echo '<li>';
                    if (isset($sub_item['url'])) :
                        echo "<a href='{$sub_item['url']}'>{$sub_item['label']}</a>";
                    else :
                        echo "<span>{$sub_item['label']}</span>";
                    endif;
                    echo '</li>';
                endforeach;
            echo '</ul>';
        endif;
    echo '</li>';
endforeach;
echo '</ul>';
*/
