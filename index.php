<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/default.css">
    <title>Ben Ferrell's Blue Fortitude | WEB250 | Joy of PHP</title>
</head>

<body>
    <?php include 'components/nav.php'; ?>
    <h3>Add a Vehicle to Inventory</h3>
    <form action="insertRecord.php" method="post">
        <label for="vin">VIN:</label>
        <input name="vin" type="text"><br>
        <label for="year">Year:</label>
        <input name="year" type="text"><br>
        <label for="make">Make:</label>
        <input name="make" type="text"><br>
        <label for="model">Model:</label>
        <input name="model" type="text"><br>
        <label for="color">Exterior Color:</label>
        <input name="color" type="text"><br>
        <label for="interior">Interior Color:</label>
        <input name="interior" type="text"><br>
        <label for="askingPrice">Asking Price:</label>
        <input name="askingPrice" type="text"><br>
        <input name="submit1" type="submit" value="Add Vehicle"><br>
    </form>
</body>

</html>