<?php
$q=$_POST["CoustomerName"];
$w=$_POST["CoustomerPhone"];
$e=$_POST["CoustomerTC"];
$r=$_POST["PersonName"];
$t=$_POST["PersonPhone"];
$y=$_POST["PersonTC"];
$u=$_POST["CarBrand"];
$ı=$_POST["CarModel"];
$o=$_POST["CarModelYear"];
$p=$_POST["CarPlateNumber"];
$ğ=$_POST["CarColor"];
$ü=$_POST["CarFirstOrSecond"];
$a=$_POST["CarImage"];
$s=$_POST["CarPicing"];
$d=$_POST["CarSalesDate"];

include('C:\wamp64\www\Sahibine.webUI\connection.php');
$sql="insert into carssold_tbl values(NULL,'$q','$w','$e','$r','$t','$y','$u','$ı','$o','$p','$ğ','$ü','$a','$s','$d')";
$sorgu=mysqli_query($connect,$sql);
if ($sorgu) {
    // Kullanıcıyı yönlendir
    header("Location: /Sahibine.webUI/index.php");
    exit; // Yönlendirme işleminden sonra kodun çalışmasını durdurmak için
} else {
    echo "Hata";
}
?>