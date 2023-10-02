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
        /*var_dump($_POST['sp']);
        var_dump($_POST['to']);
        var_dump($_POST['fr']);
        var_dump($_POST['ma']);

        var_dump($_POST['dlugosc']);
        var_dump($_POST['srednica']);
        var_dump($_POST['grubosc']);
        var_dump($_POST['powierzchnia']);
        
        var_dump($_POST['mater']);

        var_dump($_POST['termin']);
        var_dump($_POST['uwagi']);*/

        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'zakladprodukcyjny4tip';

        $conn = new mysqli($host, $user, $password, $database);
        $sql = "select opis, cena from cennik";
        if($result=$conn->connect_errno){
            echo "Błąd połączenia z bazą danych";
        }else{
            if(isset($_POST['sp']) && $_POST['material']=='st'){
                $dlugosc = $_POST['dlugosc'];
                $sql = "select opis, cena from cennik where opis = 'spawanie stali'";
                $result = $conn->query($sql);
                $cenaJedn=0;
                while($row = $result->fetch_assoc()){
                    echo "Usługa: ".$row['opis']." Cena: ".$row['cena']."</br>";
                    $cenaJedn=$row['cena'];
                }
                $cenaCalosc = $cenaCalosc+$_POST['dlugosc']*$cenaJedn;
                echo "Cena spawania aluminium o długości = ".$_POST['dlugosc']."cm wynosi ".$cenaCalosc." zł"
            }else if(isset($_POST['to']) && $_POST['material']=='st'){
                $srednica = $_POST['srednica'];
                $sql = "select opis, cena from cennik where opis = 'toczenie stali'";
                $result = $conn->query($sql);
                $cenaJedn=0;
                while($row = $result->fetch_assoc()){
                    echo "Usługa: ".$row['opis']." Cena: ".$row['cena']."</br>";
                    $cenaJedn=$row['cena'];
                }
                $cenaCalosc = $cenaCalosc+$_POST['dlugosc']*$cenaJedn;
                echo "Cena toczenia aluminium o średnicy = ".$_POST['srednica']."cm wynosi ".$cenaCalosc." zł" 

            }else if(isset($_POST['fr']) && $_POST['material']=='st'){
                $grubosc = $_POST['grubosc'];
                $sql = "select opis, cena from cennik where opis = 'frezowanie stali'";
                $result = $conn->query($sql);
                $cenaJedn=0;
                while($row = $result->fetch_assoc()){
                    echo "Usługa: ".$row['opis']." Cena: ".$row['cena']."</br>";
                    $cenaJedn=$row['cena'];
                }
                $cenaCalosc = $cenaCalosc+$_POST['dlugosc']*$cenaJedn;
                echo "Cena frezowania stali o grubości = ".$_POST['grubosc']."cm wynosi ".$cenaCalosc." zł" 

            }else if(isset($_POST['ma']) && $_POST['material']=='st'){
                $powierzchnia = $_POST['powierzchnia'];
                $sql = "select opis, cena from cennik where opis = 'malowanie stali'";
                $result = $conn->query($sql);
                $cenaJedn=0;
                while($row = $result->fetch_assoc()){
                    echo "Usługa: ".$row['opis']." Cena: ".$row['cena']."</br>";
                    $cenaJedn=$row['cena'];
                }
                $cenaCalosc = $cenaCalosc+$_POST['dlugosc']*$cenaJedn;
                echo "Cena malowania stali o powierzchni = ".$_POST['powierzchnia']."cm<sup>2</sup> wynosi ".$cenaCalosc." zł" 

            }else if(isset($_POST['sp']) && $_POST['material']=='al'){
                $dlugosc = $_POST['dlugosc'];
                $sql = "select opis, cena from cennik where opis = 'spawanie aluminium'";
                $result = $conn->query($sql);
                $cenaJedn=0;
                while($row = $result->fetch_assoc()){
                    echo "Usługa: ".$row['opis']." Cena: ".$row['cena']."</br>";
                    $cenaJedn=$row['cena'];
                }
                $cenaCalosc = $cenaCalosc+$_POST['dlugosc']*$cenaJedn;
                echo "Cena spawania aluminium o długości = ".$_POST['dlugosc']."cm wynosi ".$cenaCalosc." zł" 

            }else if(isset($_POST['to']) && $_POST['material']=='al'){
                $powierzchnia = $_POST['powierzchnia'];
                $sql = "select opis, cena from cennik where opis = 'malowanie stali'";
                $result = $conn->query($sql);
                $cenaJedn=0;
                while($row = $result->fetch_assoc()){
                    echo "Usługa: ".$row['opis']." Cena: ".$row['cena']."</br>";
                    $cenaJedn=$row['cena'];
                }
                $cenaCalosc = $cenaCalosc+$_POST['dlugosc']*$cenaJedn;
                echo "Cena malowania stali o powierzchni = ".$_POST['powierzchnia']."cm<sup>2</sup> wynosi ".$cenaCalosc." zł" 

            }else if(isset($_POST['ma']) && $_POST['material']=='st'){
                $powierzchnia = $_POST['powierzchnia'];
                $sql = "select opis, cena from cennik where opis = 'malowanie stali'";
                $result = $conn->query($sql);
                $cenaJedn=0;
                while($row = $result->fetch_assoc()){
                    echo "Usługa: ".$row['opis']." Cena: ".$row['cena']."</br>";
                    $cenaJedn=$row['cena'];
                }
                $cenaCalosc = $cenaCalosc+$_POST['dlugosc']*$cenaJedn;
                echo "Cena malowania stali o powierzchni = ".$_POST['powierzchnia']."cm<sup>2</sup> wynosi ".$cenaCalosc." zł" 

            }else if(isset($_POST['ma']) && $_POST['material']=='st'){
                $powierzchnia = $_POST['powierzchnia'];
                $sql = "select opis, cena from cennik where opis = 'malowanie stali'";
                $result = $conn->query($sql);
                $cenaJedn=0;
                while($row = $result->fetch_assoc()){
                    echo "Usługa: ".$row['opis']." Cena: ".$row['cena']."</br>";
                    $cenaJedn=$row['cena'];
                }
                $cenaCalosc = $cenaCalosc+$_POST['dlugosc']*$cenaJedn;
                echo "Cena malowania stali o powierzchni = ".$_POST['powierzchnia']."cm<sup>2</sup> wynosi ".$cenaCalosc." zł" 

            }
            
        }

        //$sql = "select opis, cena from cennik";
          //  $result = $conn->query($sql);
            
        $conn->close();
        ?>



    </div>
</body>

</html>