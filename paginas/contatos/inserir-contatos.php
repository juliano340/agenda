<header>
    <h3>Inserir contato</h3>
</header>

<?php 

    $nomeContato = mysqli_real_escape_string($conexao,$_POST["nomeContato"]);
    $emailContato = mysqli_real_escape_string($conexao,$_POST["emailContato"]);
    $telefoneContato = mysqli_real_escape_string($conexao,$_POST["telefoneContato"]);
    $sexoContato = mysqli_real_escape_string($conexao,$_POST["sexoContato"]);
    $dataNascContato = mysqli_real_escape_string($conexao,$_POST["dataNascContato"]);
    $sql = "INSERT INTO contatos (nome,email,telefone,sexo,data_nasc)
            VALUES ('{$nomeContato}','{$emailContato}','{$telefoneContato}','{$sexoContato}','{$dataNascContato}')
    ";

    mysqli_query($conexao,$sql);

    echo "Registro inserido com sucesso!";
    echo '<br><br><a href="index.php?menuop=contatos">Voltar</a>';


?>