<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="login.php" method="POST">
        <h2> LOGIN</h2>
        <?php if(isset($_GET['error'])){
            ?> <p class='error'><?php echo $_GET['error'];?></p>
            <?php } ?>
            <label>user name </label>
            <input type="text" name="uname" placeholder="User name"><br>
            <label>Password </label>
            <input type="password" name="password" placeholder="password"><br>
            <button type="submit">Login</button>

        
    </form>
</body>
</html>
