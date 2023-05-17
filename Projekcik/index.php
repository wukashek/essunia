<?php

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekcik</title>
</head>
<body>
<form>
    <div class="container">
        <h1>Dane transportowe</h1>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Transport z</span>
            <input type="text" class="form-control" placeholder="Wpisz miejscowość" aria-label="Username"
                   aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Transport do</span>
            <input type="text" class="form-control" placeholder="Wpisz miejscowość" aria-label="Username"
                   aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Typ samolotu</label>
            <select class="form-select" id="inputGroupSelect01">
                <option selected>Wybierz...</option>
                <option value="1">Airbus A380</option>
                <option value="2">Boeing 747</option>

            </select>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Dokumenty przewozowe</label>
            <input type="file" class="form-control" id="inputGroupFile01">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text">Data</label>
            <input class="form-control" type="datetime-local" placeholder="Wybierz date">
        </div>
        <div class="wrap">
            <h1> Towary </h1>
        </div>
        <div id="cargoInputs">
            <h3>Ładunek 1:</h3>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nazwa ładunku</span>
                <input type="text" class="form-control" placeholder="Wpisz nazwę ładunku" aria-label="Username"
                       aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Ciężar ładunku</span>
                <input type="number" class="form-control" placeholder="Wpisz cięzar ładunku w kg" aria-label="Username"
                       aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Typ ładunku</label>
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>Wybierz typ ładunku</option>
                    <option value="1">ładunek zwykły</option>
                    <option value="2">ładunek niebezpieczny</option>
                </select>
            </div>
        </div>
        <button type="button" class="btn btn-dark" onclick="addCargoInput()">Dodaj ładunek</button>
        <br><br>
        <button type="submit" class="btn btn-dark">Wyślij formularz</button>
    </div>

    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>

</script>
<script src="script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>