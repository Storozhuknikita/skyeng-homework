<?php
function bigSum(string $x1, string $x2): string
{
    $arrX1 = str_split($x1);
    $arrX2 = str_split($x2);
    if (count($arrX1) >= count($arrX2)) {
        $i = count($arrX1);
    } else {
        $i = count($arrX2);
    }
    $n = 0;
    $arrayResult = [];
    for ($x = 0; $x < $i; $x++) {
        $result = array_pop($arrX1) + array_pop($arrX2) + $n;
        $str = (string)$result;
        if ($result >= 10) {
            $n = 1;
        } else {
            $n = 0;
        }
        array_unshift($arrayResult, $str[$n]);
    }
    if ($n == 1) {
        array_unshift($arrayResult, $n);
    }
    return implode($arrayResult);
}

echo bigSum('111111111111111111111111111111111111111111111', '111111111111111111111111111111111111111111111');

?>