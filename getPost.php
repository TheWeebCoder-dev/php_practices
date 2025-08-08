<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getPost.php" method="post">
<label>Username</label><br>
<input type="text" name="username" id=""><br>
<label>password</label><br>
<input type="password" name="password" ><br>
<input type="submit" value="log in">
</form>
</body>
</html>

<?php
echo $_POST["username"] . "<br>";
echo $_POST["password"] . "<br>";
?>