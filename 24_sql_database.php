<?php
// SQL - Stuctured Query Language
// Ways to connect to a MySQL Database
// MySQLi Extension & PDO (php data objects)

// connecting to Database
$servername = "localhost";
$username = "root";
$password = "";

// create a connection object
$conn = mysqli_connect($servername, $username, $password);
// Die if connection was not succesful
if (!$conn) {
    die("Sorry we failed to connect:" . mysquli_connect_error());
}
else{
echo "connection was succesful.";
}
?>