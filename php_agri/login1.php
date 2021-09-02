<?php
//put this at the first line
session_start();
//if  authentication successful 
$_SESSION['login'] = "login";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Login</title>
</head>
<body>
    <p>You'r login</p>
    <p>Logout? <a href="https://localhost44.auth.ap-south-1.amazoncognito.com/logout?client_id=1c2v0m0uh4nfn85jaikqco6pvs&logout_uri=http://localhost/php_agri/logout1.php">Logout</a></p>
    <!-- https://localhost66.auth.ap-south-1.amazoncognito.com/logout?client_id=6vk2i3sbjoj6u6ec7ju1lo7aub&logout_uri=http://localhost/php_agri/logout1.html -->
</body>
</html>