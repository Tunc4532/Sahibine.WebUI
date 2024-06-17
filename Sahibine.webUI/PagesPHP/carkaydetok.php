<?php
$q=$_POST["Brand"];
$w=$_POST["Model"];
$e=$_POST["PlateNumber"];
$r=$_POST["Color"];
$t=$_POST["FirstOrSecond"];
$y=$_POST["Description"];
$u=$_POST["CarImage"];
$ı=$_POST["Pricing"];
$o=true;
$p=$_POST["GearType"];
$ğ=$_POST["Fuel"];
$ü=$_POST["ModelYear"];
$a=$_POST["PersonPhone"];
$s=$_POST["CarImage2"];
$d=$_POST["CarImage3"];
$f=$_POST["NameSurname"];

include('C:\wamp64\www\Sahibine.webUI\connection.php');
$sql="insert into cars_tbl values(NULL,'$q','$w','$e','$r','$t','$y','$u','$ı','$o','$p','$ğ','$ü','$a','$s','$d','$f')";
$sorgu=mysqli_query($connect,$sql);
if ($sorgu) {
    $lastInsertedId = mysqli_insert_id($connect);
    
    echo "<div style='margin-top: 20px;'>";
    echo "İlan aktifleştirme ve kaldırma işlemlerinde kullanacağınız numara lütfen kaydedin unutma halinde bizimle iletişime geçebilirsiniz: " . $lastInsertedId;
    echo "<br>";
    echo "<a href='http://localhost/Sahibine.webUI/index.php' style='display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none;'>Anasayfaya Dön</a>";
    echo "</div>";
} else {
    echo "Hata";
}
?>