
<?php

$servername="localhost:3306";
$username="root";
$password="Admin1234";
$dbname="asirweb";

$conn = mysqli_connect($servername, $username, $password, $dbname);
 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn,"DELETE FROM login WHERE user= '$_POST[nombre]'");

header('Location: usuarios.php');

?>



