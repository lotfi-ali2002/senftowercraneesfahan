<?php
include("function.php");
$servername = "localhost";
$username = "senftowe_tower-crane-admin";
$password = "tc-isfahan#1400";
$dbname = "senftowe_isfahan-tower-crane";
//create connection
$conn = new mysqli ($servername, $username, $password, $dbname);
//check connection
if
($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

mysqli_query($conn, "SET NAMES utf8");

$f_name = $_POST ['f_name'];
$l_name = $_POST ['l_name'];
$n_pedar = $_POST ['n_pedar'];
$coad_meli = $_POST ['coad_meli'];
$shomare_shenas = $_POST ['shomare_shenas'];
$shomare_govahi = $_POST ['shomare_govahi'];
$tarikh_tavalod = $_POST ['tarikh-tavalod'];
$shomare_hamrah = $_POST ['shomare_hamrah'];
$Etebar_govahi = $_POST ['etebar_govahiname'];
$adrs_manzel = $_POST ['adres_manzel'];
$n_shrkat = $_POST ['n_sherkat'];
$shomare_sherkat = $_POST ['shomare_sherkat'];
$adres_mahalkar = $_POST ['adres_mahalkar'];


$sql = "INSERT INTO ozviyat (f_name,l_name,n_pedar,coad_meli,shomare_shenas,
shomare_govahi,tarikh_tavalod,shomare_hamrah,etebar_govahiname,adrs_manzel,n_shrkat,
shomare_sherkat,adres_mahalkar)
VALUES ('$f_name', '$l_name', '$n_pedar', '$coad_meli', '$shomare_shenas',
'$shomare_govahi', '$tarikh_tavalod', '$shomare_hamrah', '$Etebar_govahi',
'$adrs_manzel', '$n_shrkat', '$shomare_sherkat', '$adres_mahalkar')";

if ($conn->query($sql) === TRUE) {
    redirect("../success-message-page.html");
}
else{
    echo "ثبت نام با مشکل مواجه شد ، لطفا در وارد کردن اطلاعات دقت فرمایید و از وارد کردن کد ملی تکراری خودداری کنید : " . "<br> <br>". $sql . "<br>" . $conn->error;
}

$conn->close();
?>
