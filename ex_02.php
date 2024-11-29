<?php

function min_len_array($arr)
{
    if ($arr == []) {
        return false;
    }
    foreach ($arr as $key => $val) {
        $keymin = strlen($key);
        $valmin = $val;
        foreach ($arr as $key2 => $val2) {
            if (strlen($key) > strlen($key2) && strlen($key2) < $keymin) {
                $keymin = strlen($key2);
                $valmin = $val2;
            } elseif (strlen($key) >= strlen($key2) && strlen($key2) == $keymin) {
                if (strlen($val) > strlen($val2) && strlen($val2) < strlen($valmin)) {
                    $keymin = strlen($key2);
                    $valmin = $val2;
                }
            }
        }
        break;
    }
    return $valmin;
}
