<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <h4 class="text-center">Listagem</h4>

<div class="col-md-12 text-center thumbnail " >

    <table border="1" class="table table-condensed">
    <thead style="background-color: black; color: orange;">


        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Data</th>
            <th>Hora</th>            
        </tr>

    </thead>
    <tbody>
</div>
</div>

<?php 
$sql = mysql_query("SELECT * FROM cartaz ORDER BY data DESC");
while($row=mysql_fetch_array($sql)){
    $row['data']= date("d/m/Y", strtotime($row['data']));
echo' 
                <tr>

                    <td>'.$row['idCartaz'].'</td>
                    <td>'.$row['titulo'].'</td>
                    <td>'.$row['data'].'</td>
                    <td>'.$row['hora'].'</td>
                 <td>
                    <a href="index_admin.php?acao=atualizarNoticia&id='.$row['idCartaz'].'">Atualizar</a>
                 </td>
                       
                <td>
                    <a href="index_admin.php?acao=deleteNoticia&id='.$row['idCartaz'].'">Deletar</a>
                </td>
                                        
                    
                </tr>
';
}

?>

    </tbody>
</table>