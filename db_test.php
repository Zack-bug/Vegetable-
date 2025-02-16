<?php
$servername = "localhost";  // Sunucu adı (çoğu zaman localhost)
$username = "root";         // Varsayılan kullanıcı adı
$password = "mysql1234.";             // Varsayılan şifre (XAMPP ve WAMP'te genelde boş bırakılır)
$database = "ShopApp";      // Daha önce oluşturduğunuz veritabanı adı

// Bağlantıyı oluşturma
$conn = new mysqli($servername, $username, $password, $database);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı başarısız: " . $conn->connect_error);
}
echo "Bağlantı başarılı!";

// Basit bir sorgu ile test
$sql = "SHOW TABLES";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Tablo: " . $row["Tables_in_$database"] . "<br>";
    }
} else {
    echo "Veritabanında tablo bulunamadı.";
}

// Bağlantıyı kapatma
$conn->close();
?>
