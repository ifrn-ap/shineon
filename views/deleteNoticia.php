<?php

include 'conexao.php';



mysql_query('DELETE FROM cartaz WHERE idCartaz="'.$_GET['id'].'"');

header("Location: ../index_admin.php?acao=listarNoticia");


?>