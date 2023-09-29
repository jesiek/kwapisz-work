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
//var_dump($_POST['imie']);
//var_dump($_POST['nazwisko']);
//var_dump($_POST['telefon']);


if(($_POST['imie']!="") && ($_POST['nazwisko']!="") && ($_POST['telefon']!="")){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $telefon = $_POST['telefon'];
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'zakladprodukcyjny4tip';

$conn = new mysqli($host, $user, $password, $database);
$sql = "Insert into klienci(imie, nazwisko, telefon) values('$imie', '$nazwisko', '$telefon')";

if($conn->errno){
    echo "Błąd połączenia z bazą danych";
}else{
    echo "Połączono z bazą danych";
    $result=$conn->query($sql);
    if($result){
        echo "Dodano klienta do bazy danych</br>";
        echo "Nowy klient: ".$imie." ".$nazwisko." </br>";
        echo "Tel. kontaktowy: ".$telefon;
    }else{
        echo "Błąd dodania klienta";
    }
}

$conn->close();
}else{
    echo "Wprowadzone dane są nieprawidlowe";
}



?>



</div>
</body>


</html>