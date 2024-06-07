<?php
// Include the database connection file
require 'database.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user information from the form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $city = $_POST['city'];

    // Insert user information into the database
    $user_sql = "INSERT INTO users (name, phone, address, country, city) VALUES ('$name', '$phone', '$address', '$country', '$city')";
    if(mysqli_query($conn, $user_sql)){
        // User information inserted successfully
    } else {
        // Error inserting user information
        echo "Error : " . mysqli_error($conn);
    }
}

// Close the database connection
$conn->close();
?>
