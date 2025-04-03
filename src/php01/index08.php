<?php
$people=[
    [
        'name'=>'Taro',
        'age'=>25,
        'sex'=>'men',
    ],
    [
        'name'=>'Jiro',
        'age'=>20,
        'sex'=>'men',
    ],
        [
        'name'=>'Hanako',
        'age'=>16,
        'sex'=>'women',
    ]
];

echo $people[0]["name"]."(".$people[0]['age']."歳 ".$people[0]['sex'].")<br />";
echo $people[1]["name"]."(".$people[1]['age']."歳 ".$people[1]['sex'].")<br />";
echo $people[2]["name"]."(".$people[2]['age']."歳 ".$people[2]['sex'].")<br />";