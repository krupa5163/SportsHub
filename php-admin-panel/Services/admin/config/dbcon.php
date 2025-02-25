<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "phpadminpanel";

// connection

$con = mysqli_connect("$host", "$username", "$password", "$database");
if(!$con){
    header("Location: ../errors/db.php");
    // die(mysqli_connect_errno($con));
}
// else{
//     echo "Database Connected";
// }
?>