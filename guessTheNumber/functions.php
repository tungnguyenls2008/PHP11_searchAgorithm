<?php
function createNumberArray(){
    $nums = [];
    for ($i = 0; $i < 100; ++$i) {
        $nums[$i] = $i;
    }
    for($i=0;$i<count($nums);$i++){
        echo $nums[$i].', ';
    }
}
