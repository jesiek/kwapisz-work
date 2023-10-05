<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Odczytaj</title>
    <link href="style.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="baner">
        <h4>Jan Kaczmarek 4TIP</h4>
</div>
        <div id="container">
        <fieldset id="f1">
            <legend>Zdarzenia</legend>
            <form method="POST" action="wydarzenia.php">
                <label> Data od:</label>
            <input type="date" name="data1" ></input></br>
            <label> Data do:</label>
            <input type="date" name="data2" ></input></br>

        <input type="submit" value="Pokaż"/>


    </fieldset>
    </div>

</body>
</html>