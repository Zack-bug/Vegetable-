<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vegetable_db1";

$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else 
 echo("Connection Succaaaa"); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       
        $_SESSION["user"] = $email;
        header("Location: Homepage.html"); 
        exit();
    } else {
        echo "Invalid email or password.";
    }
}

$conn->close();
?>
