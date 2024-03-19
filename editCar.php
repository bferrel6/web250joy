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
    include 'components/db.php';

    $vin = $_GET['VIN'];
    $query = "SELECT * FROM inventory WHERE VIN = '$vin'";

    //try to query the database
    if ($result = $mysqli->query($query)) {
        //don't do anything if successful
    } else {
        echo "Sorry, a vehicle with VIN of $vin cannot be found " . $mysqli->error . "<br>";
    }

    //loop through all the rows returned by the query, creating a table row for each
    while ($result_ar = mysqli_fetch_assoc($result)) {
        $vin = $result_ar['VIN'];
        $year = $result_ar['YEAR'];
        $make = $result_ar['MAKE'];
        $model = $result_ar['MODEL'];
        $trim = $result_ar['TRIM'];
        $color = $result_ar['EXT_COLOR'];
        $interior = $result_ar['INT_COLOR'];
        $mileage = $result_ar['MILEAGE'];
        $transmission = $result_ar['TRANSMISSION'];
        $price = $result_ar['ASKING_PRICE'];
    }

    $mysqli->close();
    ?>
    <h3>Edit Vehicle Details</h3>
    <form action="updateRecord.php" method="post">
        <label for="vin">VIN:</label>
        <input name="vin" type="text" value="<?php echo $vin; ?>"><br>
        <label for="year">Year:</label>
        <input name="year" type="text" value="<?php echo $year; ?>"><br>
        <label for="make">Make:</label>
        <input name="make" type="text" value="<?php echo $make; ?>"><br>
        <label for="model">Model:</label>
        <input name="model" type="text" value="<?php echo $model; ?>"><br>
        <label for="color">Exterior Color:</label>
        <input name="color" type="text" value="<?php echo $color; ?>"><br>
        <label for="interior">Interior Color:</label>
        <input name="interior" type="text" value="<?php echo $interior; ?>"><br>
        <label for="askingPrice">Asking Price:</label>
        <input name="askingPrice" type="text" value="<?php echo $price; ?>"><br>
        <input name="submit1" type="submit" value="Submit Changes"><br>
    </form>
</body>

</html>