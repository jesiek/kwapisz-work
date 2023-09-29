<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Sklep spożywczy</title>
    <link href="stylizacja.css" rel="stylesheet" type="text/css"/> 
</head>

<body>
<div id="container"> 
<fieldset id="f1">   
<div id="baner">
    <h1>Produkty</h1>
</div>
<div class="warzywa">
<h4>Dodaj zakupy</h4>

    <form method="POST" action="dodaj.php">
    <label for="nazwa">Nazwa</label>
    <input type="textarea" name="nazwa"/></br>

    <label for="cena">Cena</label>
    <input type="text" name="cena"></br>
    
    <label for="ilosc">Ilość</label>
    <input type="text" name="ilosc"></br>
    

    <label for="data_zakupu">Data zakupu</label>
    <input type="date" name="data_zakupu"></br>
    

    <input type="submit" value="Dodaj do koszyka"/>
</form>
</fieldset>
</div>
<div id="img">
    <img id="myImage" src="warzywa.jpg"/>
</div>