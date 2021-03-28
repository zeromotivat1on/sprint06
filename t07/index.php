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

        echo $_SERVER["PHP_SELF"]." <br>";          // name of file of script
        echo $_SERVER["argv"]." <br>";              // array of passed arguments
        echo $_SERVER["SERVER_ADDR"]." <br>";       // ip-address of the host server
        echo $_SERVER["HTTP_HOST"]." <br>";         // name of host
        echo $_SERVER["SERVER_PROTOCOL"]." <br>";   // name and version of the information protocol
        echo $_SERVER["QUERY_STRING"]." <br>";      // query-string
        echo $_SERVER["HTTP_USER_AGENT"]." <br>";   // user-agent information
        echo $_SERVER["REMOTE_ADDR"]." <br>";       // ip-address of the client
        echo $_SERVER["REQUEST_URI"]." <br>";       // complete url

    ?>
</body>
</html>