<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "jashvant";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}
$sql = "SELECT * FROM `employees`";
$result = mysqli_query($conn, $sql);

// find the number of records returns
echo mysqli_num_rows($result);
echo " Records found in Database of employee. <br>";

// Display the rows returned by the sql query
while ($row = mysqli_fetch_assoc($result)) {
    // echo var_dump($row);
    echo $row ['Sr. No.'] . ". Hello " . $row ['Name'] . " Welcome to Gada Elctronics for " . $row ['Role'] . " from " . $row ['DOJ'] ;
    echo "<br>";
}



?>