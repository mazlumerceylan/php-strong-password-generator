<?php
// Inizia la sessione.
session_start();
// Se non esiste una password nella sessione, termina lo script.
if (!isset($_SESSION['password'])) {
    die("Errore: Password non generata.");
}

// Recupera la password dalla sessione.
$password = $_SESSION['password'];

// Elimina la password dalla sessione
unset($_SESSION['password']);
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Tua Password</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <h2>Password Generata:</h2>
        <p><?php echo $password; ?></p>
        <a href="index.php" class="btn btn-primary">Genera un'altra password</a>
    </div>
</body>

</html>
