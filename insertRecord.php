<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/default.css">
    <title>Ben Ferrell's Blue Fortitude | WEB250 | Joy of PHP</title>
</head>

<body>
    <?php
    include 'components/nav.php';

    //Capture the values posted to this php program from the text fields in the form

    $vin = $_POST['vin'];
    $year = $_POST['year'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $price = $_POST['askingPrice'];
    $color = $_POST['color'];
    $interior = $_POST['interior'];

    //Build a SQL query using the values from above

    $query = "INSERT INTO inventory (VIN, YEAR, MAKE, MODEL, ASKING_PRICE, EXT_COLOR, INT_COLOR) VALUES (
            '$vin',
            '$year',
            '$make',
            '$model',
            '$price',
            '$color',
            '$interior'
        )";

    //Print the query to the browser so you can see it
    echo "Your INSERT query: " . $query . "<br>";

    //access mysql and select cars database
    include 'components/db.php';

    //try to insert the new car into the database
    if ($result = $mysqli->query($query)) {
        echo "You have successfully entered <em>$make $model</em> into the database.<br>";
    } else {
        echo "Error entering $vin into database" . $mysqli_error($mysqli) . ".<br>";
    }

    $mysqli->close();
    ?>
    <p><a href="viewCars.php">View Auto Inventory</a></p>
</body>

</html>