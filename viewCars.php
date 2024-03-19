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

    echo "<h3>Auto Inventory</h3>";

    $query = "SELECT * FROM INVENTORY";

    //try to query the database
    if ($result = $mysqli->query($query)) {
        // don't do anything if successful
    } else {
        echo "Error getting cars from the database: " . $mysqli_error($mysqli) . "<br>";
    }

    //create the table headers
    echo "<table id='grid'><tr>";
    echo "<th> Make </th>";
    echo "<th> Model </th>";
    echo "<th> Asking Price </th>";
    echo "<th> Operations </th>";
    echo "</td></tr>\n";

    //keep track of whether a row was even or odd, so we can style it later
    $class = "odd";

    //loop through all the rows returned by the query, creating a table row for each
    while ($result_ar = mysqli_fetch_assoc($result)) {
        echo "<tr class='$class'>";
        echo "<td><a href='viewCar.php?VIN=" . $result_ar['VIN'] . "'>"
            . $result_ar['MAKE'] . "</a></td>";
        echo '<td>' . $result_ar['MODEL'] . "</td>";
        echo '<td>$' . $result_ar['ASKING_PRICE'] . "</td>";
        echo "<td><a href='editCar.php?VIN=" . $result_ar['VIN'] . "'><em>Edit</em></a> | ";
        echo "<a onclick='return confirm(\"Are you sure?\")' href='deleteRecord.php?VIN=" 
            . $result_ar['VIN'] . "'><em>Delete</em></a></td>";
        echo '</tr>';

        //if the last row was even, make the next one odd, and vice versa
        if ($class == "odd") {
            $class = "even";
        } else {
            $class = "odd";
        }
    }

    echo "</table>";
    $mysqli->close();
    ?>
</body>

</html>