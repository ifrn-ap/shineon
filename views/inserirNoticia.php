<h4 class="text-center">Inserção de Notícias</h4>
<div class="row">
    <div class="col-md-12">
        <form method="POST" action="scripts/addnoticia.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">
                    Título:
                </label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="titulo" required><br>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">
                    Categoria:
                </label>
                <div class="col-sm-10">
                    <select class="form-control" name="categoria">
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
                    Imagem:
                </label>
                <div class="col-sm-10">
                    <input class="form-control" type = "file" name= "arquivo" required><br>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">
                Data  
                </label>
                <div class="col-sm-10">
                    <input class="form-control" type = "date" name= "data" required><br>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">
                Hora   
                </label>
                <div class="col-sm-10">
                    <input class="form-control" type = "time" name= "hora" required><br>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">
                Palavras-Chave   
                </label>
                <div class="col-sm-10">
                    <input class="form-control" type = "text" name= "palavrasChave" required><br>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">
                Descrição   
                </label>
                <div class="col-sm-10">
                    <textarea rows="4" class="form-control" type = "text" name= "descricao" required></textarea><br>
                </div>
            </div>
            <div class="text-center">
            <button class="btn btn-primary btn-lg" type="submit" style="background: black;">Inserir</button>
            </div>
        </form>
    </div>
</div>
