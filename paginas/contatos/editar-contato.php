<?php

$id = $_GET['id'];
echo $id;
$sql = "SELECT * FROM contatos WHERE id_contato = {$id}";
echo $sql;
$rs = mysqli_query($conexao, $sql) or die("Erro");
$dados = mysqli_fetch_assoc($rs);


?>

<script type="text/javascript">
    
    $(document).ready(function(){
  
    $("#celular").mask('(00) 00000-0000');
   
});

</script>


<header>
    <h3>Editar cadastro de contatos</h3>
</header>

<div>
    <form action="index.php?menuop=atualizar-contato" method="post">
        <div>
            <label class="form-label" for="idContato">ID</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-key"></i></span>
                <input readonly class="form-control col-xs-3" type="text" name="idContato" value="<?= $dados["id_contato"] ?>">
            </div>

        </div>

        <div>
            <label class="form-label" for="nomeContato">Nome</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <input class="form-control" type="text" name="nomeContato" value="<?= $dados["nome"] ?>">
            </div>
        </div>

        <div>
            <label class="form-label" for="emailContato">E-mail</label>
            <div class="input-group">
                <span class="input-group-text">@</span>
                <input class="form-control" type="email" name="emailContato" value="<?= $dados["email"] ?>">

            </div>
        </div>

        <div>

            <label class="form-label" for="telefoneContato">Telefone</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                <input maxlength=11  id="celular" class="form-control" type="tel" name="telefoneContato" value="<?= $dados["telefone"] ?>">
                
            </div>
        </div>

        <div>

            <label class="form-label" for="sexoContato">Sexo</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                <select class='form-select' name="sexoContato" id="sexoContato">
                    
                    <?php 
                        if($dados["sexo"] == 'F') {
                            echo "<option value='F'>Feminino</option>";
                           echo '<option value="M">Masculino</option>';

                        } else {
                            echo "<option value='M' selected>Masculino</option>";
                            echo "<option value='F'>Feminino</option>";
                        }
                    
                    ?>
                
                    
                    
                    
                </select>
            </div>
        </div>

        <div>
            <label class="form-label" for="dataNascContato">Data de nascimento</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar3"></i></span>
                <input class="form-control" type="date" name="dataNascContato" value="<?= $dados["data_nasc"] ?>">
            </div>
        </div>
        <div>
            <input class="btn btn-primary mt-3" type="submit" value="Atualizar" name="btnAdicionar">
        </div>
    </form>
</div>