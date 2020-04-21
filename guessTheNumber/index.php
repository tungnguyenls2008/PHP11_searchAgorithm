<?php
include "functions.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body><form method="post">
<input type="number" placeholder="your number" name="number">
    <input type="submit" name="submit">
    <?php
    if (isset($_POST['submit'])){
        $arr=createNumberArray();
        $num=$_POST['number'];
        $result=binarySearch($arr,0,100,$num);
        if ($result){
            echo displayNumberArray($arr);
        }
        //echo '<span style="font-size: xx-large; ">' .$result. '</span>';
    }
    ?>
</form>
</body>
</html>
