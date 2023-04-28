<!-- <?php

    $id = $_GET['id'];
    echo $id;
    $sql = "SELECT * FROM CONTATOS WHERE id_contato={$id}";
    echo $sql;
    $rs = mysqli_query($conexao, $sql) or die("Erro");
    $dados = mysqli_fetch_assoc($rs);
    

?> -->


<header>
    <h3>Editar cadastro de contatos</h3>
</header>

<div>
    <form action="index.php?menuop=atualizar-contato" method="post">
        <div>
            <label for="idContato">ID</label>
            <input type="text" name="idContato" value="<?=$dados["id_contato"]?>">
        </div>

        <div>
            <label for="nomeContato">Nome</label>
            <input type="text" name="nomeContato" value="<?=$dados["nome"]?>">
        </div>

        <div>
            <label for="emailContato">E-mail</label>
            <input type="email" name="emailContato" value="<?=$dados["email"]?>">
        </div>

        <div>
            <label for="telefoneContato">Telefone</label>
            <input type="text" name="telefoneContato" value="<?=$dados["telefone"]?>">
        </div>

        <div>
            <label for="sexoContato">Sexo</label>
            <input type="text" name="sexoContato"value="<?=$dados["sexo"]?>">
        </div>

        <div>
            <label for="dataNascContato">Data de nascimento</label>
            <input type="date" name="dataNascContato" value="<?=$dados["data_nasc"]?>">
        </div>
        <div>
            <input type="submit" value="Atualizar" name="btnAdicionar">
        </div>
    </form>
</div>