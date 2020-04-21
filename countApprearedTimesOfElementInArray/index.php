<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php
function countAppearedTimesOfElementInArray()
{
    $nums = [];
    $target = rand(1, 100);
    $count = 0;
    for ($i = 0; $i < 100; ++$i) {
        $nums[$i] = rand(1, 100);
    }

    for ($i = 0; $i < count($nums); $i++) {

        if ($target == $nums[$i]) {
            $nums[$i]= '<font size="7">' . $nums[$i] . '</font>';
            $count++;
        }echo "$nums[$i] , ";
    }
    return 'The number '.$target.' appeared '.$count.' times inside the given array';
}
echo countAppearedTimesOfElementInArray();
?>
</body>
</html>
