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

    // capture the values posted to this php program from the text fields in the form
    $vin = $_REQUEST['vin'];
    $year = $_REQUEST['year'];
    $make = $_REQUEST['make'];
    $model = $_REQUEST['model'];
    $color = $_REQUEST['color'];
    $interior = $_REQUEST['interior'];
    $price = $_REQUEST['askingPrice'];

    // build a SQL query using the values from above
    $query = "UPDATE inventory SET
    
    VIN = '$vin',
    YEAR = '$year',
    MAKE = '$make',
    MODEL = '$model',
    EXT_COLOR = '$color',
    INT_COLOR = '$interior',
    ASKING_PRICE = '$price'

    WHERE VIN = '$vin'";

    // print the query to the browser so you can see it
    echo "Your UPDATE query: " . $query . "<br>";

    include 'components/db.php';

    // try to update the database record
    if ($result = $mysqli->query($query)) {
        echo "<p>You have successfully updated <em> $make $model </em> in the database. </p>";
    } else {
        echo "Error entering $vin into database: " . mysqli_error($mysqli) . "<br>";
    }
    $mysqli->close();
    ?>
    <p><a href="viewCars.php">Return to Auto Inventory</a></p>
</body>

</html>