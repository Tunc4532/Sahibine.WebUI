<?php
// Formdan gelen verileri al
$carId = $_POST["CarId"];
$newStatus = false;

// Veritabanı bağlantısı
include('C:\wamp64\www\Sahibine.webUI\connection.php');

// Bağlantı kontrolü
if ($connect) {
    // Güncelleme sorgusu
    $sql = "UPDATE cars_tbl SET CarSatus='$newStatus' WHERE CarId='$carId'";
    
    // Sorguyu çalıştır
    $query = mysqli_query($connect, $sql);

    // Sorgu başarılıysa
    if ($query) {
        // Kullanıcıyı yönlendir
        header("Location: /Sahibine.webUI/index.php");
        exit; // Yönlendirme işleminden sonra kodun çalışmasını durdurmak için
    } else {
        echo "Hata";
    }

    // Bağlantıyı kapat
    mysqli_close($connect);
} else {
    die("Veritabanı bağlantısı başarısız.");
}
?>						