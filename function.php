<?php
// Definisco una funzione per generare una password casuale.
function generaPassword($lunghezza) {
  // Questa stringa contiene tutti i possibili caratteri che possono essere usati nella password.
  $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()';
  $password = '';
  // Genera una password casuale della lunghezza specificata.
  for ($i = 0; $i < $lunghezza; $i++) {
      $randomIndex = rand(0, strlen($caratteri) - 1);
      $password .= $caratteri[$randomIndex];
  }
  // Salva la password generata in una variabile di sessione.
  $_SESSION['password'] = $password;


  return $password;
}
?>
