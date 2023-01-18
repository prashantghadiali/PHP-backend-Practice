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
$sql = "SELECT * FROM `employees` WHERE `Role` = 'job'";
$result = mysqli_query($conn, $sql);

// Usage of where clause to fetch the data from database of jashvant
$num = mysqli_num_rows($result);
echo $num . " Records found in Database of Employee for role of Job. <br>";
$no = 1;
if($num> 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $no . ". Hello " . $row['Name'] . ".";
        echo "<br>";
        $no = $no + 1;
    }
}
//  Usage of where clause to update data
$sql = "UPDATE `employees` SET `Name` = 'Unknown' WHERE `employees`.`Name` = 'Unidentifie'";
$result = mysqli_query($conn, $sql);
echo ($result);
if($result){
    echo " we update the result succesfully.";
}
else
    echo "we could not update the result successfully.";
?>

