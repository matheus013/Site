<?php

include 'connectDB.php';

function nome($id){
    $query = mysql_query("SELECT * FROM Programacao WHERE id = $id");
    while($thing = mysql_fetch_array($query))
            $nome = $thing['nome'];
    
    return $nome;
}

?>

