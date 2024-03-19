<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session variables</title>
</head>
<body>
    <?php 
    session_start();
    
    if (isset($_SESSION['FirstName'])) 
        unset($_SESSION['FirstName']);
    
    $_SESSION['FirstName']='Ben';
    if (isset($_SESSION['FirstName'])) {
        echo $_SESSION['FirstName']."'s Amazon";
    } else {
        $_SESSION['views'] = 1;
        echo "Welcome to Amazon";
    }

    ?>
</body>
</html>