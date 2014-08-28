<?php

/* Para manipular sessões é necessário começar uma */
session_start();

/* Deletando sessão */
session_destroy();

header('location:index.php');

?>

