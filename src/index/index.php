<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // When the request method is GET, no params are submitted.
    $showPattern = 'form';
    $msg = "Haven't we met before?<br/>Let me know your Name.";
} else {
    // When the request method is POST, the user_name is submitted.
    // Make connetcion to DB server
    $mysqli = new mysqli('192.168.33.11', 'lamp', '', 'lamp_db');

    if ($mysqli->connect_error) {
        // When DB returns error
        $msg = "Sorry, I'm confused.<br/>Leave me alone...";
    } else {
        $userName = $_POST['user_name'];
        $userName = $mysqli->real_escape_string($userName);
        
        if (getIsFirst($mysqli, $userName)) {
            // When the user comes for the first time
            $isSuccess = registerUser($mysqli, $userName);
            if ($isSuccess) {
                // When success to register user_name
                $msg = "Oh, this is the first time to see you.<br/>Nice to meet you, {$userName}!";
            } else {
                // When failure to register user_name
                $msg = "Excuse me?";
            }
        } else {
            $msg = "Oh, Long time no see, {$userName}!";
        }
    }
    $mysqli->close();
}

function getIsFirst(mysqli $mysqli, string $userName): bool
{
    $query = "SELECT * FROM users WHERE user_name = '" . $userName . "';";
    $resultNum = $mysqli->query($query)->num_rows;

    if ($resultNum === 0) {
        $isFirst = true;
    } else {
        $isFirst = false;
    }
    return $isFirst;
}

function registerUser(mysqli $mysqli, string $userName): bool
{
    $query = "INSERT INTO users (user_name) VALUES ('" . $userName . "');";
    $isSuccess = $mysqli->query($query);
    return $isSuccess;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="./index.css" rel="stylesheet">
    </head>
    <body>
        <h1 class="h1-index">
            <?php echo $msg ?>
        </h1>

        <?php if ($showPattern === 'form') { ?>
            <form method="POST" action="./">
                <input type="text" name="user_name" placeholder="Your name">
                <input type="submit" value="Enter">
            </form>
        <?php } else { ?>
            <a href="./">Back</a>
        <?php } ?>
    </body>   
</html>