<!DOCTYPE html>
<html>
<body>
<?php
$user = $_POST['nombre'];
?>
<b><?php echo $user; ?></b>:<br><br>
<form action="update.php" method="POST">
    <input type="hidden" name="nombre" value="<?php echo $user;?>">
    Password: <input type="pass" name="password"><br>
    <input type="submit" value="update">
</form> 

</body>
</html>