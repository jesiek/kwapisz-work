<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Odczyt z DB</title>
    <link href="style.css" rel="stylesheet" type="text/css"/> 
</head>

<body>
<div id="wydarzenia">  

<?php
var_dump($_POST['data1']);
var_dump($_POST['data2']);
//var_dump($_POST['numer']);

if(($_POST['data1']!="") && ($_POST['data2']!="")){
    $data1 = $_POST['data1'];
    $data2 = $_POST['data2'];

    
}

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'radar';



$conn = new mysqli($host, $user, $password, $database);
$sql = "Select idZdarzenia, numer, predkosc, data, czas from zdarzenia where (data >= '".$data1."') AND (data <= '".$data2."')";

if($conn->connect_errno){
    echo "Błąd połączenia z bazą danych";
}else{
   // echo "Połączono z bazą danych";
    $result=$conn->query($sql);
    $number = 0;
    echo "</br>Zestawienie wykroczeń drogowych od ".$data1." do " .$data2."</br>";
    ?>
                <a href=index.php><h4>Wróć do poprzedniej strony</h4></a>
<table class="center" border=1 >
    
    <th>LP.</th>
    <th>Numer</th>
    <th>Prędkość</th>
    <th>Data</th>
    <th>Czas</th>
    <tr>
        
    <?php
        while($row = $result->fetch_assoc()){
            $number++;
            $number = $row['idZdarzenia'];
            $n = $row['numer'];
            $p = $row['predkosc'];
            $d = $row['data'];
            $c = $row['czas'];?>

            <td><?php echo $number ?></td><?php
            ?><td><?php echo $n ?></td><?php
            ?><td><?php echo $p ?></td><?php
            ?><td><?php echo $d ?></td><?php
            ?><td><?php echo $c ?></td></tr><?php

        }?>
        
    </table>
       <?php $conn->close(); }?>









</div>
</body>


</html>