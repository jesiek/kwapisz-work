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


if(($_POST['imie']!="") && ($_POST['nazwisko']!="") && 
($_POST['wiek']!="") && ($_POST['miasto']!="") && ($_POST['stanowisko']!="")){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $wiek = $_POST['wiek'];
    $miasto = $_POST['miasto'];
    $stanowisko = $_POST['stanowisko'];
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'zakladprodukcyjny4tip';



$conn = new mysqli($host, $user, $password, $database);
$sql = "Insert into pracownicy(imie, nazwisko, wiek, miasto, stanowisko) 
values('$imie', '$nazwisko', '$wiek', '$miasto', '$stanowisko')";

if($conn->errno){
    echo "Błąd połączenia z bazą danych";
}else{
    echo "Połączono z bazą danych";
    $result=$conn->query($sql);
    if($result){
        echo "Dodano pracownika do bazy danych</br>";
        echo "Nowy pracownik: ".$imie." ".$nazwisko." w wieku ".$wiek." lat z ".$miasto." </br>";
        echo "Stanowisko: ".$stanowisko;
    }else{
        echo "Błąd dodania pracownika";
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