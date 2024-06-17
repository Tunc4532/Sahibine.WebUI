<?php
$q=$_POST["FirstName"];
$w=$_POST["LastName"];
$e=$_POST["Phone"];
$r=$_POST["Adress"];
$t=$_POST["TC"];
$y=$_POST["Mail"];
$u=$_POST["Password"];
$ı=$_POST["UserImage"];

include('C:\wamp64\www\Sahibine.webUI\connection.php');
$sql="insert into user_tbl values(NULL,'$q','$w','$e','$r','$t','$y','$u','$ı')";
$sorgu=mysqli_query($connect,$sql);
if ($sorgu) {
    // Kullanıcıyı yönlendir
    header("Location: /Sahibine.webUI/login.php");
    exit; // Yönlendirme işleminden sonra kodun çalışmasını durdurmak için
} else {
    echo "Hata";
}
?>