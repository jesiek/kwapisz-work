<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>zapis do db</title>
    <link href="style.css" rel="stylesheet" type="text/css"/> 
</head>

<body>
<div id="container">
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'spozywczak';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
  echo "Błąd połączenia z bazą danych" . $conn->connect_error;  
}

$nazwa = $_POST['nazwa'];
$cena = $_POST['cena'];
$ilosc = $_POST['ilosc'];
$data_zakupu = $_POST['data_zakupu'];

$sql = "INSERT INTO warzywa(nazwa, cena, ilosc, data_kupna) VALUES ('$nazwa', '$cena', '$ilosc', '$data_zakupu')";

if ($conn->query($sql) === TRUE) {
echo "Produkt został dodany do bazy danych.";
} else {
    echo "Błąd podczas dodawania produktu do bazy danych:" . $conn->error;
}
$conn->close();
?>

</body>
</html>