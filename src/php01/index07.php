<?php

function aaa($score1, $score2, $score3)
{
    $val=$score1+$score2+$score3;

    if($val>210){
        echo "合計点は".$val."なので合格です<br />";
    }else{
        echo "合計点は".$val."なので不合格です<br />";
    }
    return;
}

aaa(50,50,50);
aaa(10,10,10);

function sankaku($teihen, $takasa){
    $area=$teihen*$takasa/2;
    return $area;
}

function sikaku($tate, $yoko){
    $area=$tate*$yoko;
    return $area;
}

function daikei($teihen, $chouhen, $takasa){
    $area=($teihen+$chouhen)*$takasa/2;
    return $area;
}

$a=sankaku(5,4);
$b=sikaku(5,5);
$c=daikei(5,5,4);

echo $a.", ".$b.", ".$c;