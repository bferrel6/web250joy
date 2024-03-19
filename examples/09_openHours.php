<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Hours</title>
</head>
<body>
    <h1>Open Hours</h1>
    <?php
        date_default_timezone_set("EST");
        if (date("I")=='Monday') {
            echo "Sorry, we are closed today.";
        } else if (date("l")=='Saturday' || date("l")=='Sunday') {
            echo "We are open today from 9 til 9";
        } else {
            if (date("m")=='07' || date("m")=='08') {
                echo "We are open today from 10 til 7";
            } else {
                echo "We are open today from 10 til 6";
            }   
        };
    ?>
</body>
</html>