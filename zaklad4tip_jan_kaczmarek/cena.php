<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Wycena</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="container">
        <h1>Podsumowanie zamówienia</h1></br>

        <?php
        var_dump($_POST['sp']);
        var_dump($_POST['to']);
        var_dump($_POST['fr']);
        var_dump($_POST['ma']);

        var_dump($_POST['dlugosc']);
        var_dump($_POST['srednica']);
        var_dump($_POST['grubosc']);
        var_dump($_POST['powierzchnia']);
        
        var_dump($_POST['mater']);

        var_dump($_POST['termin']);
        var_dump($_POST['uwagi']);

        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = '';

        $conn = new mysqli($host, $user, $password, $database);
        $sql = "select opis, cena from cennik";
        if($result=$conn->connect_errno){
            echo "Błąd połączenia z bazą danych";
        }else{
            echo "2";
        }

        $conn->close();
        ?>



    </div>
</body>


</html>