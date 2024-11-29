<?php

function rev_epur_str($str = null)
{
    if ($str === null) {
        return false;
    }
    $str = trim($str);
    $arr = [];
    $newstr = "";
    $j = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == " " || $str[$i] == "\t") {
            $j++;
        } elseif (!isset($arr[$j])) {
            $arr[$j] = $str[$i];
        } else {
            $arr[$j] = $arr[$j] . $str[$i];
        }
    }
    $arr = array_reverse($arr);
    foreach ($arr as $value) {
        $newstr = $newstr . $value . " ";
    }
    $newstr = trim($newstr);
    return $newstr;
}
