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

function addNumers($num1, $num2){
    $sum = $num1 + $num2;


    return $sum;
}

$result = addNumers(34, 64);
echo $result ."<br>";
$result = addNumers($result,100);
echo $result;

    ?>
    
</body>
</html>