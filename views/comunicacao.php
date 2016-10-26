<?php 
$sql = mysql_query("SELECT * FROM cartaz  WHERE categoria='comunicacao' ORDER BY data DESC");
while($row=mysql_fetch_array($sql)){
    $row['data']= date("d/m/Y", strtotime($row['data']));
echo' 
                <div class="row">   
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">'.$row['titulo'].'</h4>
                                <p class="category">'.$row['data'].' as '.$row['hora'].'</p>
                            </div>
                            <div class="content">
                                <div id="chartHours" class="ct-chart"> 
                                <div class="col-md-3">
                                    <img src="'.$row['anexo'].'" class="img-responsive"/>
                                </div>
                                <div class="col-md-9" style="text-align: justify;">
                                    '.$row['texto'].'
                                </div>
                            </div>
                                <div class="footer">
                                    <div class="legend">
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Palavras chaves:
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
';
}
?>
