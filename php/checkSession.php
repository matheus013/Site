<?php

/* Previne que a pagina seja acessada por alguém que não está logado */
if(!isset($_SESSION['login']) && !isset($_SESSION['senha']))
        header('location:index.php');

?>