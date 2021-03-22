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

    // new way of creating an array
    $numberListNewWay = [];


    // creating a new array
    $numberList = array(23, 64, 267,478,267,'4234', '<h1>Hello</h1>');
    
    //echo $numberList;        //dislpays:Array
    //echo $numberList[0];      //displays:23

    print_r($numberList);     // displays:Array ( [0] => 23 [1] => 64 [2] => 267 [3] => 478 [4] => 267 [5] => 4234 [6] =>

    echo $numberList[4];        //display:267
    

    ?>  
    
</body>
</html>