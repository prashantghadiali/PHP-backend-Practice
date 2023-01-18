<?php

// SQL - Stuctured Query Language
// Ways to connect to a MySQL Database
// MySQLi Extension & PDO (php data objects)

// connecting to Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "jashvant3";

// create a connection object
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not succesful
if (!$conn) {
    die("Sorry we failed to connect:". mysquli_connect_error());
}
else{
echo "connection was succesful.<br>";
}
// create a tables
$sql = "CREATE TABLE .`phptrip` (`sr` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(18) NOT NULL , `employee type` VARCHAR(18) NOT NULL , `DOJ` DATE NOT NULL , PRIMARY KEY (`sr`));
";
$result = mysqli_query($conn, $sql);
echo "the result is";
echo var_dump($result);
echo "<br>";
// check for database creation success
if($result){
    echo "The database created succesfully<br>";
}
else{
    echo "The database was not created successfully because of this error -->" . mysqli_error($conn);
}

?>