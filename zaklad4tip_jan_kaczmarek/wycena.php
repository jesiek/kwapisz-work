<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Wycena</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="container">
        <h1>Formularz wyceny usługi</h1>
        <fieldset id="f1">
            <legend>Dane usługi</legend>

            <form method="POST" action="cena.php">
                <input type="checkbox" name="sp" id="sp" onclick="pokaz_spawanie();">
                <label for="sp">Spawanie</label></br>
                <div id="sp1" style="display:none">
                    <label for="sp">Długość</label>
                    <input type="text" name="dlugosc">
                    <label for="sp">cm</label>
                </div>
                <input type="checkbox" name="to" id="to" onclick="pokaz_toczenie();">
                <label for="to">Toczenie</label></br>
                <div id="to1" style="display:none">
                    <label for="to">Średnica</label>
                    <input type="text" name="srednica">
                    <label for="to">cm</label>
                </div>
                <input type="checkbox" name="fr" id="fr" onclick="pokaz_frezowanie();">
                <label for="fr">Frezowanie</label></br>
                <div id="fr1" style="display:none">
                    <label for="fr">Grubość</label>
                    <input type="text" name="grubosc">
                    <label for="fr">cm</label>
                </div>
                <input type="checkbox" name="ma" id="ma" onclick="pokaz_malowanie();">
                <label for="ma">Malowanie</label></br>
                <div id="ma1" style="display:none">
                    <label for="ma">Powierzchnia</label>
                    <input type="text" name="powierzchnia">
                    <label for="ma">cm<sup>2</sup></label>
                </div>

                <h5>Wybierz Materiał:</h5>
                <input type="radio" value="mater">Stal</input>
                <input type="radio" value="mater">Aluminium</input>

                <h5>Termin realizacji:</h5>
                <select name="termin">
                    <option value="14">do 14 dni</option>
                    <option value="7">do 7 dni</option>
                    <option value="2">do 2 dni</option>
                </select>

                <h5>Uwagi:</h5>
                <textarea type="textarea" col="30" row="5"></textarea>
                <input type="submit" value="Wyceń">
            </form>
        </fieldset>

        <script>
        function pokaz_spawanie() {
            if (sp.checked == 1) {
                document.getElementById('sp1').style.display = "block";
            } else {
                document.getElementById('sp1').style.display = "none";
            }


        }

        function pokaz_toczenie() {
            if (to.checked == 1) {
                document.getElementById('to1').style.display = "block";
            } else {
                document.getElementById('to1').style.display = "none";
            }


        }

        function pokaz_frezowanie() {
            if (fr.checked == 1) {
                document.getElementById('fr1').style.display = "block";
            } else {
                document.getElementById('fr1').style.display = "none";
            }


        }

        function pokaz_malowanie() {
            if (ma.checked == 1) {
                document.getElementById('ma1').style.display = "block";
            } else {
                document.getElementById('ma1').style.display = "none";
            }


        }
        </script>

    </div>
</body>


</html>