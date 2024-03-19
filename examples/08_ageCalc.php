<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
</head>
<body>
    <?php
        function age($age){
            list($year, $month, $day) = explode("-", $age);
            $year_diff = date("Y") - $year;
            $month_diff = date("m") - $month;
            $day_diff = date("d") - $day;
            if ($day_diff < 0 || $month_diff < 0)
                $year_diff--;
            return $year_diff;
        };

        $monkey = age('1986-07-11');
        echo "<h2>$monkey</h2>";
    ?>
</body>
</html>