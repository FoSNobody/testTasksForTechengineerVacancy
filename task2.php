<?php

$string = 'певна стрічка';
// це більш простим способом
// для нього потрібно в php.ini включити extension php_intl
$translatedString = transliterator_transliterate("Any-Latin; NFD; [:Nonspacing Mark:] Remove; NFC; [:Punctuation:] Remove; Lower();", $string);
echo "\nOld string: " . $string . "\n Translated sting: " . $translatedString;


$convertedSymbols = [
    'а' => 'a',   'б' => 'b',   'в' => 'v',
    'г' => 'g',   'ґ' => 'g',   'д' => 'd',
    'е' => 'e',   'є' => 'e',   'ж' => 'zh',
    'з' => 'z',   'і' => 'i',   'ї' => 'y',
    'й' => 'y',  'к' => 'k',   'л' => 'l',
    'м' => 'm',  'н' => 'n',  'о' => 'o',
    'п' => 'p',   'р' => 'r',  'с' => 's',
    'т' => 't',   'у' => 'u',   'ф' => 'f',
    'х' => 'h',   'ц' => 'c',  'ч' => 'ch',
    'ш' => 'sh',  'щ' => 'sch', 'ь' => '\'',
    'и' => 'y',   'ю' => 'yu',  'я' => 'ya',

    'А' => 'A',   'Б' => 'B',   'В' => 'V',
    'Г' => 'G',   'Ґ' => 'G',   'Д' => 'D',
    'Е' => 'E',   'Є' => 'E',   'Ж' => 'Zh',
    'З' => 'Z',   'І' => 'I',   'Ї' => 'yi',
    'Й' => 'Y',   'К' => 'K',   'Л' => 'L',
    'М' => 'M',   'Н' => 'N',   'О' => 'O',
    'П' => 'P',   'Р' => 'R',   'С' => 'S',
    'Т' => 'T',   'У' => 'U',   'Ф' => 'F',
    'Х' => 'H',   'Ц' => 'C',  'Ч' => 'Ch',
    'Ш' => 'Sh',  'Щ' => 'Sch', 'Ь' => '\'',
    'И' => 'Y',   'Э' => 'E',  'Ю' => 'Yu',
    'Я' => 'Ya',
];

//теж дієвий спосіб
$translatedStringTwo = strtr($string, $convertedSymbols);
echo "\nOld string: " . $string . "\n Translated stingTwo: " . $translatedStringTwo;