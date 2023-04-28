<?php

    $id = $_GET['id'];
    echo $id;
    $sql = "SELECT * FROM contatos WHERE id_contato = {$id}";
    echo $sql;
    $rs = mysqli_query($conexao, $sql) or die("Erro");
    $dados = mysqli_fetch_assoc($rs);
    

?>



<header>
    <h3>Editar cadastro de contatos</h3>
</header>

<div>
    <form action="index.php?menuop=atualizar-contato" method="post">
        <div>
            <label class="form-label" for="idContato">ID</label>
            <input class="form-control col-xs-3" type="text" name="idContato" value="<?=$dados["id_contato"]?>">
        </div>

        <div>
            <label class="form-label" for="nomeContato">Nome</label>
            <input class="form-control" type="text" name="nomeContato" value="<?=$dados["nome"]?>">
        </div>

        <div>
            <label class="form-label" for="emailContato">E-mail</label>
            <input class="form-control" type="email" name="emailContato" value="<?=$dados["email"]?>">
        </div>

        <div>
            <label class="form-label" for="telefoneContato">Telefone</label>
            <input class="form-control" type="text" name="telefoneContato" value="<?=$dados["telefone"]?>">
        </div>

        <div>
            <label class="form-label" for="sexoContato">Sexo</label>
            <input class="form-control" type="text" name="sexoContato"value="<?=$dados["sexo"]?>">
        </div>

        <div>
            <label class="form-label" for="dataNascContato">Data de nascimento</label>
            <input class="form-control mb-3" type="date" name="dataNascContato" value="<?=$dados["data_nasc"]?>">
        </div>
        <div>
            <input class="btn btn-primary" type="submit" value="Atualizar" name="btnAdicionar">
        </div>
    </form>
</div>