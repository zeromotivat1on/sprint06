<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>What Thanos did for the Soul Stone?</h1>

    <form action="index.php" method="post">
        <input type="radio" name="lol" value="1">Jumped from the mountain</input><br>
        <input type="radio" name="lol" value="2">Made stone keeper to jump from the mountain</input><br>
        <input type="radio" name="lol" value="3">Pushed Gamora off the mountain</input><br><br>

        <input type="submit" value="I made a choice!"></input><br><br>
    </form>

    <p>
        <?php

            $temp = $_POST["lol"];

            if($temp) {

                if($temp == "1" || $temp == "2") {

                    echo "<p>Shame on you! Go and watch Avengers</p>";

                } else {

                    echo "<p>Good boy!</p>";

                }

            }

        ?>
    </p>
</body>
</html>

