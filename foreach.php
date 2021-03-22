<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each Loop</title>
</head>
<body>
    
<pre>
    // similar as a range loop
for($counter = 0; $counter < 10; $counter++){
        echo $counter . &lt;br&gt;";
    }
</pre>
<hr>




<?php
$numbers = [345,35,676,342,453];

// simaliar to for range loop
foreach($numbers as $number){
    echo $number . "<br>";
}


?>
</body>
</html>