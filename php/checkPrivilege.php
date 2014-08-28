<?php

// Redireciona caso o usuário não tenha o nível de privilégio necessário
        if($_SESSION['level']< 1)
        header('location:home.php');

?>

