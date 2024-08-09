<?php
function exam($score1, $score2, $score3)
{
    $add = $score1 + $score2 + $score3;
    if($add > 210) {
        echo "合格点は" . $add . "なので合格です";
    }else{
        echo $add . "なので不合格です";
    }
}

echo (exam(80,60,90));

function squareArea ($base, $height)
{
    return $base * $height;
}
function triangleArea ($base, $height)
{
    return $base * $height / 2;
}
function trapezoidArea ($upperbase, $lowerbase, $height)
{
    return ($upperbase + $lowerbase) * $height /2;
}

echo squareArea(5, 5) ."\n";
echo triangleArea(5, 5) ."\n";
echo trapezoidArea(5,7,5);