<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Switch Statements </h1>
    <pre>
    $number = 34;
    switch($number){
        case 34:
            echo "is it 34";
            break;
        case 37:
            echo "it is 37";
            break;
        case 39:
            echo "it is 39";
            break;
        default: 
            echo "we could not find anything";
            break;

    }
</pre>
<h2>Output from php below</h2>
    <?php
    $number = 34;
    switch($number){
        case 34:
            echo "is it 34";
            break;
        case 37:
            echo "it is 37";
            break;
        case 39:
            echo "it is 39";
            break;
        default: 
            echo "we could not find anything";
            break;
    }

    ?>





</body>
</html>