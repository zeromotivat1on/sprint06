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

    function calculate_time() : array {

        return [11, 11, 30];

    } 

    $time = calculate_time();
    echo "\nIn quantum space you were absent for ". $time[0] . " years, ".$time[1] . " months, ". $time[2] . " days\n";

    ?>
</body>
</html>