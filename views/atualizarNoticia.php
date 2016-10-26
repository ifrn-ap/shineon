<?php 
$sql = mysql_query('SELECT * FROM cartaz WHERE idCartaz="'.$_GET['id'].'"');
$row = mysql_fetch_array($sql);
?>
<h4 class="text-center">Inserção de Notícias</h4>
<div class="row">
    <div class="col-md-12">
        <form method="POST" action="scripts/upnoticia.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">
                    ID:
                </label>
                <div class="col-sm-10">
                 <input type="text" name="id" value="<?php echo $_GET['id']; ?>"><br>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">
                    Título:
                </label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="titulo" value="<?php echo $row['titulo']; ?>" required><br>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">
                    Categoria:
                </label>
                <div class="col-sm-10">
                    <select class="form-control" name="categoria">
                    <?php echo '<option value="'.$row['categoria'].'">'.$row['categoria'].'</option>';?>
                        <option value="assistencia">Assistência</option>
                        <option value="atividade">Atividade Estudantis</option>
                        <option value="comunicacao">Comunicação</option>
                        <option value="esporte">Esporte</option>
                        <option value="saude">Saúde</option>
                    </select><br>
                </div>
            </div>                   
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">
                Data: 
                </label>
                <div class="col-sm-10">
                    <input class="form-control" type = "date" name= "data" value="<?php echo $row['data']; ?>" required><br>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">
                Hora:   
                </label>
                <div class="col-sm-10">
                    <input class="form-control" type = "time" name= "hora" value="<?php echo $row['hora']; ?>" required><br>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">
                Palavras-Chave   
                </label>
                <div class="col-sm-10">
                     <input class="form-control" type = "text" name= "palavrasChave" value="<?php 
                        echo $row['palavrasChave']; ?>" required><br>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">
                Descrição   
                </label>
                <div class="col-sm-10">
                    <textarea rows="4" class="form-control" type = "text" name= "descricao" required><?php echo $row['texto']; ?></textarea><br>
                </div>
            </div>
            <div class="text-center">
            <button class="btn btn-primary btn-lg" type="submit" style="background: black;">Atualizar</button>
            </div>
        </form>
    </div>
</div>
