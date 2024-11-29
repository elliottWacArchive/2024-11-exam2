<?php

function playWithMe($n = null)
{
    $number1 = array('1', '2', '3');
    $alpha1 = array('a', 'b', 'c');
    $alpha2 = array('bbb', 'aaa', 'cc', 'bb', 'aa', 'c', 'b', 'a');
    $number2 = array('32', '31', '23', '22', '21', '13', '12', '11');
    $convert = '1';
    if (!is_int($n) || $n < 0) {
        return false;
    }
    for ($i = 0; $i < $n; $i++) {
        $lettermask = str_replace($number1, $alpha1, $convert);
        $convert = str_replace($alpha2, $number2, $lettermask);
    }
    echo "$convert\n";
    return true;
}
// strreplace (-> cherche (plusieurs masques dans un tableau) ; -> remplace (tableau pour plusieurs val) ; -> sujet)
