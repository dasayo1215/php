<?php
$i=0;

while($i<=50){
    if($i%3==0 && $i%5==0){
        echo $i." FizzBuzz<br />";
    }elseif($i%3==0 && $i%5!=0){
        echo $i." Fizz<br />";
    }elseif($i%3!=0 && $i%5==0){
        echo $i." Buzz<br />";
    }else{
        echo $i."<br />";
    }
    $i++;
}


for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        echo "〇";
    }
    echo "<br />";
}