<?php
//Project Euler #1
$numbers = [1,2,3,4,5,6,7,8,9,10];

foreach($numbers as $result){
    if($result % 3 === 0){
        echo $result;
    }
}

#1.2
foreach(range(1,1000) as $result){
    if($result % 3 === 0){
        echo $result . ",";
    }
}

//Project Euler #2
$max_sequence = 4000000;
$sequence = [1,1,2];
$sum = 0;

while($sequence[2] <= $max_sequence){
    if($sequence[2] % 2 === 0){
        $sum += $sequence[2];
    }
    $sequence[0] = $sequence[1];
    $sequence[1] = $sequence[2];
    $sequence[2] = $sequence[0] + $sequence[1];
}
echo "$sum\n";