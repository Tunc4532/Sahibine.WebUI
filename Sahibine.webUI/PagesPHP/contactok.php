<?php
$q=$_POST["NameSurname"];
$w=$_POST["Email"];
$e=$_POST["Description"];

include('C:\wamp64\www\Sahibine.webUI\connection.php');
$sql="insert into contact_tbl values(NULL,'$q','$w','$e')";
$sorgu=mysqli_query($connect,$sql);
if ($sorgu) {
    // Kullanıcıyı yönlendir
    header("Location: /Sahibine.webUI/index.php");
    exit; // Yönlendirme işleminden sonra kodun çalışmasını durdurmak için
} else {
    echo "Hata";
}
?>