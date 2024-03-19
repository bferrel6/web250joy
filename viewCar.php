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
    $query = "SELECT * FROM inventory WHERE VIN='$vin'";

    // try to query the cars table
    if ($result = $mysqli->query($query)) {
        //don't do anything if successful
    } else {
        echo "Sorry, a vehicle with a VIN of $vin cannot be found"
            . mysqli_error($mysqli) . "<br>";
    }

    // loop through all the rows returned by the query, creating a table row for each
    while ($result_ar = mysqli_fetch_assoc($result)) {
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

    echo "<h3>$year $make $model</h3>";
    echo "<p>Asking Price: $price</p>";
    echo "<p>Exterior Color: $color</p>";
    echo "<p>Interior Color: $interior</p>";

    $query = "SELECT * FROM images WHERE VIN = '$vin'";
    
    // try to query the images table
    if ($result = $mysqli->query($query)) {
        //got some results
        //loop through all the rows returned by the query
        echo "<div>";
        while ($result_ar = mysqli_fetch_assoc($result)) {
            $image = $result_ar['IMAGE_FILE'];
            echo "<img src='images/$image'>";
        }
        echo "</div>";
    } else {
        echo "Sorry, images of a vehicle with a VIN of $vin cannot be found"
            . mysqli_error($mysqli) . "<br>";
    }

    $mysqli->close();
    ?>
    <h4>Upload a Photo</h4>
    <form action="uploadFile.php?VIN=<?php echo $vin; ?>" method="post" enctype="multipart/form-data">
        <label for="file">Filename:</label>
        <input type="file" name="file" id="file"></br>
        <input type="submit" name="submit" value="Upload">
    </form>

    <p><a href="viewCars.php">Return to Auto Inventory</a></p>
</body>

</html>