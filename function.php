<?php
function generaPassword($lunghezza) {
  $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()';
  $password = '';

  for ($i = 0; $i < $lunghezza; $i++) {
      $randomIndex = rand(0, strlen($caratteri) - 1);
      $password .= $caratteri[$randomIndex];
  }

  return $password;
}
?>
