<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    
    $email = $_POST["email"];
    

    // Display the submitted data
    
    echo "Email: " . $email . "<br>";
    
}
?>