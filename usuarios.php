
<?php 
$servername="localhost:3306";
$username="root";
$password="Admin1234";
$dbname="asirweb";

$conn = mysqli_connect($servername, $username, $password, $dbname);
 


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$query = "SELECT user FROM login";

$result = mysqli_query($conn, $query);

?>
<html>
<head>
<style>
   /* https://www.w3schools.com/css/tryit.asp?filename=trycss_table_striped */ 
   table {
    border-collapse: collapse;
    width: 100%;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even) {background-color: #f2f2f2;}   
</style>
</head>
<body>
<table>

<?php
    // output data of each row
    while($row = mysqli_fetch_array($result)){
    
    


?>
   <tr>
    <td>
        <?php echo $row[0] ?>:
    </td>
    <td>
        <form action="delete.php" method="POST">
            <input type="hidden" name="nombre" value="<?php echo $row[0] ?>">
            <input type="submit" value="delete">
        </form>
    </td>
    <td> 
        <form action="update.php" method="POST">
            <input type="hidden" name="nombre" value="<?php  echo$row[0] ?>">
          
            <input type="submit" value="update">
        </form> 
    </td>
    </tr>
<?php
}  // while
?>
</table>
</body>