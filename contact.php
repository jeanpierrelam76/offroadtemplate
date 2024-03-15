
<?php

//header('location: index.html' );

$email= $_POST['email'];



$host = "localhost";
$dbname = "agences";
$username = "root";
$password = "";
        
$conn = new mysqli($host, $dbname, $username, $password );
        
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
        
$sql = "INSERT INTO agences (email)
        VALUES (?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

$stmt->bind_param("ssis",$email);

mysqli_stmt_execute($stmt);

echo "email envoyé avec succés! <br>";
?>