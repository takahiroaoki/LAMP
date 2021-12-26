<?php

$mysqli = new mysqli('192.168.33.11', 'lamp', '', 'mysql');

if ($mysqli->connect_error) {
    echo $mysqli->connect_error;
    exit();
} else {
    $mysqli->set_charset("utf8");
    echo 'SUCESS to access to DB';
}

$mysqli->close();

?>

<!DOCTYPE html>
<html>
    <head>
        <link href="./index.css" rel="stylesheet">
    </head>
    <body>
        <h1 class="h1-index">Hello Vagrant!</h1>
    </body>   
</html>