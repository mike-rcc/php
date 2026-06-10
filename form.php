<?php
    $username = null;
    $first_name = null;
    $last_name = null;
    $password = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><strong><u>Data Entry Form:<u><strong></h2>
        <form action="index.php" method="post">
            <label>Username: </label>
            <input type="text" name="username"><br>
            <label>First Name: </label>
            <input type="text" name="first_name"><br>
            <label>Last Name: </label>
            <input type="text" name="last_name"><br>
            <label>Password: </label>
            <input type="password" name="password"><br>        
        </form>
</body>
</html>