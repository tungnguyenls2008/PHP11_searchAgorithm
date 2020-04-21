<?php
if(isset($_POST['submit'])){
    $phoneNumbers=$_POST['phoneNumberList'];
    $phoneNumbersToArr=explode(', ',$phoneNumbers);
}
$viettel = ['086', '096', '097', '098', '032', '033', '034', '035', '036', '037', '038', '039'];
$mobiphone = ['089', '090', '093', '070', '079', '077', '076', '078'];
$vinaphone = ['088', '091', '094', '083', '084', '085', '081', '082'];

function sortByPrefix($phoneNumbersArr, $mobileNetwork)
{
    $data = [];
    foreach ($phoneNumbersArr as $phoneNumber) {
        $prefix = substr($phoneNumber, 0, 3);
        foreach ($mobileNetwork as $first3Digits) {
            if ($prefix == $first3Digits) {
                array_push($data, $phoneNumber);
            }
        }
    }
    return $data;
}

function displayPhoneNumber($arr)
{
    foreach ($arr as $item) {
        echo $item."<br>";
    }
}
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
<body>
<form method="post">
    <label>
        <textarea name="phoneNumberList" placeholder="Enter your list of phone numbers, separated by colon"></textarea>
    </label>
<input type="submit" name="submit">
    <p>example: 0912192134, 0989066365, 0932654555, 0914256365, 0826365474, 076745255, 097452514</p>
<br>
    <table>
        <tr>
            <td>VIETTEL</td>
            <td>MOBIFONE</td>
            <td>VINAPHONE</td>
        </tr>
        <tr>
            <td><?php displayPhoneNumber(sortByPrefix($phoneNumbersToArr,$viettel)); ?></td>
            <td><?php displayPhoneNumber(sortByPrefix($phoneNumbersToArr,$mobiphone)); ?></td>
            <td><?php displayPhoneNumber(sortByPrefix($phoneNumbersToArr,$vinaphone)); ?></td>
        </tr>
    </table>
</form>
</body>
</html>
