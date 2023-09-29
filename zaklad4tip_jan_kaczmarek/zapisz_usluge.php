<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>zapis uslugi do db</title>
    <link href="style.css" rel="stylesheet" type="text/css"/> 
</head>

<body>
<div id="container">  

<?php
//var_dump($_POST['imie']);
//var_dump($_POST['nazwisko']);
//var_dump($_POST['telefon']);


if(($_POST['imie']!="") && ($_POST['nazwisko']!="") && 
($_POST['data']!="") && ($_POST['cena']!="") && ($_POST['opis']!="")){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $data = $_POST['data'];
    $cena = $_POST['cena'];
    $opis = $_POST['opis'];
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'zakladprodukcyjny4tip';



$conn = new mysqli($host, $user, $password, $database);
$sql = "Insert into uslugi(opis, data, cena, idKlient, idPracownik) 
values('$opis', '$data', '$cena', 
(select idKlient from klienci where imie='$imie' and nazwisko='$nazwisko'), 
(select idPracownik from pracownicy where imie='Marcin' and nazwisko='Kowalski'))";

if($conn->errno){
    echo "Błąd połączenia z bazą danych";
}else{
    echo "Połączono z bazą danych";
    $result=$conn->query($sql);
    if($result){
        echo "Dodano usługę do bazy danych</br>";
        echo "Nowa usługa: ".$opis."</br>";
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