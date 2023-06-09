<?php

include 'function.php';

session_start();


// Se la richiesta GET contiene il campo 'lunghezza'...
if (isset($_GET['lunghezza']) && $_GET['lunghezza'] != '') {
  $lunghezza = $_GET['lunghezza'];
  // Se la lunghezza è minore di 8, mostra un messaggio di errore.
  if ($lunghezza < 8) {
      echo "<div class='container py-5'><h2>Errore:</h2><p>La password deve avere almeno 8 caratteri.</p></div>";
    // Altrimenti, genera una password e reindirizza l'utente alla pagina della password.
  } else {
      $password = generaPassword($lunghezza);
      header('Location: password.php');
    }
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
        <h1>Generatore di Password Sicure</h1>
        <form action="index.php" method="GET">
            <div class="form-group">
                <label for="lunghezza">Lunghezza della Password:</label>
                <input type="number" class="form-control" id="lunghezza" name="lunghezza" min="8" required>
            </div>
            <button type="submit" class="btn btn-primary">Genera Password</button>
        </form>
    </div>
</body>
</html>