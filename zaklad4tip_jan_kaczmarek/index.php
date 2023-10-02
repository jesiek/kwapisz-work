<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Zakład Produkcyjny</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="container">
        <div id="baner">
            <h1>Zakład Produkcyjny</h1>
        </div>
        <div id="lewy">
            <h4>Oferujemy następujące usługi:</h4>
            <div id="ol1">
                <ol>
                    <a href="#" id="1" onclick="changeImage(this.id)">
                        <li>Spawanie</li>
                    </a>
                    <li>Frezowanie</li>
                    <li>Toczenie</li>
                    <li>Malowanie</li>
                </ol>
            </div>
            <a href=wycena.php>
                <h4>Wycena usługi</h4>
            </a>
            <a href=klienci.php>
                <h4>Pokaż klientów</h4>
            </a>

        </div>
        <div id="prawy">
            <img id="myImage" src="spawanie.png" />
        </div>


        <div id="dolny">
            <div class="klient_pracownik">
                <h4>Dodaj klienta</h4>
                <form method="POST" action="zapisz_klienta.php">
                    <label for="name">Imię</label>
                    <input type="text" name="imie" /></br>
                    <label for="surname">Nazwisko</label>
                    <input type="text" name="nazwisko"></br>
                    <label for="phone">Telefon</label>
                    <input type="text" name="telefon"></br>
                    <input type="submit" value="Zapisz" />
                </form>
            </div>
            <div class="klient_pracownik">
                <h4>Dodaj pracownika</h4>
                <form method="POST" action="zapisz_pracownika.php">
                    <label for="imie">Imię</label>
                    <input type="text" name="imie" /></br>
                    <label for="nazwisko">Nazwisko</label>
                    <input type="text" name="nazwisko"></br>
                    <label for="wiek">Wiek</label>
                    <input type="text" name="wiek"></br>
                    <label for="miasto">Miasto</label>
                    <input type="text" name="miasto"></br>
                    <label for="stanowisko">Stanowisko</label>
                    <input type="text" name="stanowisko"></br>
                    <input type="submit" value="Zapisz" />
                </form>
            </div>
            <div class="klient_pracownik">
                <h4>Dodaj usługę</h4>
                <form method="POST" action="zapisz_usluge.php">
                    <label for="opis">Opis</label>
                    <input type="textarea" name="opis" /></br>

                    <label for="data">Data</label>
                    <input type="date" name="data"></br>

                    <label for="cena">Cena</label>
                    <input type="text" name="cena"></br>

                    <label for="imie">Imie klienta</label>
                    <input type="text" name="imie"></br>

                    <label for="nazwisko">Nazwisko klienta</label>
                    <input type="text" name="nazwisko"></br>

                    <input type="submit" value="Zapisz" />
                </form>
            </div>


        </div>

        <div id="stopka">
            <h4>Witrynę przygotował: Jan Kaczmarek 4TIP ZSBEM</h4>
        </div>

    </div>
</body>


</html>