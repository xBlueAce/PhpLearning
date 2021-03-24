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
    
    // regular array
    $number = array(10,20,49);
    $number1 = array('juanita','maria','jose');
    print_r($number1); //displays the array completely
    echo "<br>".$number[1] . "<br>";

    //assoc array
    $names = array("first_name" => 'Edwin', "Last_Name"=>'Diaz');
    print_r($names);
    echo "<br>";
    echo $names['first_name'] . " ". $names['Last_Name'];


    ?>
</body>
</html>