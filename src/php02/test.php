<?php

$date = new DateTime('',new DateTimeZone('Europe/Moscow'));
echo $date->format('H:i');

echo "<br />";

$timezone_list = DateTimeZone::listidentifiers();
// foreachでリストの最後まで見る
foreach($timezone_list as $val){
    echo $val;
}