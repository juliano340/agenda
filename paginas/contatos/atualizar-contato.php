<header>
    <h3>Atualizar contato</h3>
</header>

<?php 

    $idContato = mysqli_real_escape_string($conexao,$_POST["idContato"]);
    $nomeContato = mysqli_real_escape_string($conexao,$_POST["nomeContato"]);
    $emailContato = mysqli_real_escape_string($conexao,$_POST["emailContato"]);
    $telefoneContato = mysqli_real_escape_string($conexao,$_POST["telefoneContato"]);
    $sexoContato = mysqli_real_escape_string($conexao,$_POST["sexoContato"]);
    $dataNascContato = mysqli_real_escape_string($conexao,$_POST["dataNascContato"]);

    $sql = "update contatos
            set nome = '{$nomeContato}',
            email = '{$emailContato}',
            telefone = '{$telefoneContato}',
            sexo = '{$sexoContato}',
            data_nasc = '{$dataNascContato}'
            where id_contato = {$idContato}";

    
    mysqli_query($conexao,$sql);

    echo "Registro atualizado com sucesso!";
    echo '<br><br><a class="btn btn-secondary" href="index.php?menuop=contatos">Voltar</a>';
?>