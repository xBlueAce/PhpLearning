<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php


$string = "for string function info : https://www.php.net/ref.strings";
echo $string ."<br>string length:" . strlen($string) ."<br>";
echo "to upper string" . strtoupper($string);


echo "<h1>Array Built-in Functions</h1>";
$list = [343,34,323,23,54,232,453];
echo " :dollarsign:list = [343,34,323,23,54,232,453]<br>";
echo max($list);
echo "<br>";


echo "source https://www.php.net/ref.array.php"
?>
</body>
</html>