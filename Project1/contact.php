<?php

if(isset($_POST['submit'])){
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "e-commerce";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }


// Create a table for holding customer data
    // $sql = "CREATE TABLE customer (
    // roll_no INT AUTO_INCREMENT PRIMARY KEY,
    // name VARCHAR(100) NOT NULL,
    // email VARCHAR(100),
    // contact VARCHAR(15) NOT NULL,
    // feedback varchar(50) 
    // )";

    // if($conn->query($sql)=== TRUE) {
    //     echo "Table 'customer' created successfully";
    // } else {
    //     echo "Error creating table: " . $conn->error;
    // }

    
    // to fetch the data and insert data in database
    $name = $_POST['CustomerName'];
    $email = $_POST['CustomerEmail'];
    $contact = $_POST['CustomerContact'];
    $feedback = $_POST['CustomerFeedback'];

    $sql = "INSERT INTO customer (name, email, contact, feedback) VALUES ('$name', '$email', '$contact', '$feedback')";

    if($conn->query($sql) === TRUE) {
        echo "<script>alert('Message sent successfully!'); window.location.href='contact.html';</script>";;
    }else{
        echo "Error: " . $sql. "<br>". $conn->error;
    }

    $conn->close();
}
?>