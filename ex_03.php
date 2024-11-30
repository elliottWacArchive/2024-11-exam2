<?php

function resum_join_str($str14 = null, $str3 = null)
{
    if ($str14 === null || $str3 === null) {
        return false;
    }
    if (strlen($str14) < 14) {
        add_point($str14, 14);
    }
    if (strlen($str3) < 3) {
        add_point_first($str3, 3);
    }
    return substr($str14, 0, 14) . substr($str3, (strlen($str3) - 3), 3);
}

function add_point(&$str, $size)
{
    $strlen = strlen($str);
    for ($i = 0; $i < ($size - $strlen); $i++) {
        $str = $str . ".";
    }
}

function add_point_first(&$str, $size)
{
    $strlen = strlen($str);
    for ($i = 0; $i < ($size - $strlen); $i++) {
        $str = "." . $str;
    }
}
