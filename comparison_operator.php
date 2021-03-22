<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Comparison Operator</h2>
    <pre>
        equal ==
        identical ===
        compare > < >= <= <>
        not equal != 
        not identical !==
</pre>
    <h2>Logical Operators</h2>
    <pre>

    And &&
    Or ||
    Not !
    ---------------------------------
</pre>

<?php
 if (4 <= 4){
     echo "it is true";
 }


 if(4 == "4"){
     echo " 4 == 4 is equal" . "<br>"; 
 }
 if(4 === " 4"){
     echo "4 === 4 is identical";
 }
 else{
     echo "4 === 4 is not idential since \"4\" is a string and 4 is
      an int<br>";
 }


?>




</body>
</html>