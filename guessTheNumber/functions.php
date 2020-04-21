<?php
function createNumberArray()
{
    $nums = [];
    for ($i = 0; $i < 100; ++$i) {
        $nums[$i] = $i;
    }
    return $nums;
}

function displayNumberArray($array)
{
    if (isset($_POST['submit'])) {
        $num = $_POST['number'];
        for ($i = 0; $i < count($array); $i++) {

            if ($num == $array[$i]) {
                $array[$i] = '<font size="7">' . $array[$i] . '</font>';
            }
            echo "$array[$i] , ";
        }
    }return NULL;
}

function binarySearch(array $arr, $start, $end, $x)
{
    if ($end < $start) {
        return false;
    }
    $mid = floor(($end + $start) / 2);
    if ($arr[$mid] == $x) {
        return true;
    } elseif ($arr[$mid] > $x) {
        return binarySearch($arr, $start, $mid - 1, $x);
    } else {
        return binarySearch($arr, $mid + 1, $end, $x);
    }
}