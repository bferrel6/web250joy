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
    $query = "DELETE FROM inventory WHERE VIN = '$vin'";
    echo "Your DELETE query: " . $query . "<br>";

    // try to execute the DELETE against the database
    if ($result = $mysqli->query($query)) {
        echo "The vehicle with VIN $vin has been deleted <br>";
    } else {
        echo "Sorry, a vehicle with VIN of $vin cannot be found: " . mysqli_error($mysqli) . "<br>";
    }

    $mysqli->close();
    ?>


    <p><a href="viewCars.php">Return to Auto Inventory</a></p>
</body>
</html>