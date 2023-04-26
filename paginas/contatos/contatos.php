<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contatos</title>
</head>
<body>
    <header>
        <h3>Contatos</h3>
    </header>
    <div>
        <a href="index.php?menuop=cad-contatos">Novo contato</a>
        <br>
        <br>
    </div>

    <div>
        <form action="index.php?menuop=contatos" method="post">
            <input type="text" name="txt_pesquisa" value="">
            <input type="submit" value="Pesquisar">
            
        </form>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-Mail</th>
                <th>Telefone</th>
                <th>Sexo</th>
                <th>Data de Nascimento</th>
                <th>Edição</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
                $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]: "";

                $newsql = "SELECT id_contato, upper(nome) as nome,
                    lower(email) as email,
                    telefone,
                    CASE
                        WHEN sexo='F' THEN 'FEMININO'
                        WHEN sexo='M' THEN 'MASCULINO'
                    ELSE
                        'NÃO ESPECIFICADO'
                    END AS sexo,
                    date_format(data_nasc,'%d/%m/%Y') as data_nasc
                    
                    FROM contatos
                    WHERE id_contato = '{$txt_pesquisa}' or nome LIKE '%{$txt_pesquisa}%'
                    ORDER BY nome asc;
                    ";
                

                
                $rs = mysqli_query($conexao,$newsql);
                while($dados = mysqli_fetch_assoc($rs)) {
               
            
            ?>
            <tr>
                <th><?=$dados["id_contato"] ?></th>
                <th><?=$dados["nome"] ?></th>
                <th><?=$dados["email"] ?></th>
                <th><?=$dados["telefone"] ?></th>
                <th><?=$dados["sexo"] ?></th>
                <th><?=$dados["data_nasc"] ?></th>
                <th>
                    <a href="index.php?menuop=editar-contato&id=<?=$dados["id_contato"]?>"> Editar </a>
                </th>
                <th>
                    <a href="index.php?menuop=excluir-contato&id=<?=$dados["id_contato"]?>"> Excluir </a>
                </th>
            </tr>
            <?php 
                }
            
            ?>

        </tbody>
    </table>

</body>
</html>