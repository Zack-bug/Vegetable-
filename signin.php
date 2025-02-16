<?php
// config.php dosyasını dahil et
include 'config.php';

// Form gönderildiyse veriyi işle
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];

    // Şifreyi güvenli şekilde hashleyelim
    $hashed_sifre = password_hash($sifre, PASSWORD_DEFAULT);

    // Veriyi veritabanına ekleme sorgusu
    $sql = "INSERT INTO kullanicilar (kullanici_adi, sifre) VALUES (?, ?)";
    $stmt = $conn->prepare($sql); $stmt->bind_param("ss", $kullanici_adi,
$hashed_sifre); if ($stmt->execute()) { echo "Kayıt başarılı!"; } else { echo
"Hata: " . $stmt->error; } // Bağlantıyı kapatma $stmt->close(); $conn->close();
} ?>