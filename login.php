<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "mysql1234.";
$dbname = "ShopApp";

// Bağlantı oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

// Form gönderildiyse
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Güvenlik için kullanıcıdan gelen verileri temizle
    $email = htmlspec
