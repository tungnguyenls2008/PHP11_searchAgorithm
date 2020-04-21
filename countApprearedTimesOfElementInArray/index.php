<?php
function countAppearedTimesOfElementInArray()
{
    $nums = [];
    $target = rand(1, 100);
    $count = 0;
    for ($i = 0; $i < 100; ++$i) {
        $nums[$i] = rand(1, 100);
    }
    foreach ($nums as $num) {
        echo $num . ", ";
    }
    for ($i = 0; $i < count($nums); $i++) {
        if ($target == $nums[$i]) {
            $nums[$i]='<h1>'.$nums[$i].'</h1>';
            $count++;
        }
    }
    return 'The number '.$target.' appeared '.$count.' times inside the given array';
}
echo countAppearedTimesOfElementInArray();