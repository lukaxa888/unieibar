<?php

$servername="localhost:3306";
$username="root";
$password="Admin1234";
$dbname="asirweb";

$usuario = $_POST['nombre'];
$nuevapass = $_POST['pass'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
 


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$query = "UPDATE login SET pass='$nuevapass' where user = '$usuario'";
$result = mysqli_query($conn, $query);

header('Location: usuarios.php');

?>

