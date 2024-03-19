<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown</title>
</head>
<body>
    <?php
        $target = mktime(0, 0, 0, 07, 31, 2024);
        $today = time();
        $difference = ($target-$today);
        $days = (int) ($difference/86400);
        print "I will be moved to New Bern in less than $days days.";
    ?>
</body>
</html>