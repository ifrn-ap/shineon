<h4 class="text-center">Cadastro de Usuários</h4>
<div class="row">
    <div class="col-md-12">
        <form method="POST" action="scripts/addcadastro.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">
                    Nome:
                </label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="nome" required><br>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">
                    Preferência:
                </label>
                <div class="col-sm-10">
                    <class="form-control" name="preferencia">
                       <input type="radio" name="opcao" value="assistencia"/> Assistência Social<br />
                        <input type="radio" name="opcao" value="atividades"/> Atividades Estudantis<br />
                        <input type="radio" name="opcao" value="comunicacao"/> Comunicação<br />
                        <input type="radio" name="opcao" value="esporte"/> Esporte<br />
                        <input type="radio" name="opcao" value="saude"/> Saúde<br />
                    </select><br>
                </div>
            </div>                   
           <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">
                    E-mail:
                </label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="email" required><br>
                </div>
            </div>
            
            <div class="text-center">
            <button class="btn btn-primary btn-lg" type="submit" style="background: black;">CONCLUIR</button>
            </div>
        </form>
    </div>
</div>
