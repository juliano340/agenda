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

                $quantidade = 10;

                $pagina = (isset($_GET["pagina"]))?(int)$_GET['pagina']:1;

                $inicio = ($quantidade * $pagina) - $quantidade;

            
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
                    ORDER BY nome asc
                    LIMIT $inicio, $quantidade
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

    <?php 

        $sql_total = 'SELECT id_contato FROM contatos';
        $qrTotal = mysqli_query($conexao,$sql_total) or die('ERRO');
        $numTotal = mysqli_num_rows($qrTotal);
        $totalPagina = ceil($numTotal/$quantidade);
        

        echo '<a href="?menuop=contatos&pagina=1">Primeira página</a>';

        if($pagina>6) {
            ?>
                <a href="?menuop=contatos&pagina=<?php echo $pagina-1?>"> << </a>
            <?php
        }

        for ($i=1;$i<=$totalPagina;$i++) {
            if($i == $pagina) {
                echo $i;
            } else {
                echo "<a href=\"?menuop=contatos&pagina=$i\">$i</a> ";
               }
        }

        if($pagina<($totalPagina-5)) {
            ?>
                <a href="?menuop=contatos&pagina=<?php echo $pagina+1?>"> >> </a>
            <?php
        }

        echo "<a href=\"?menuop=contatos&pagina=$totalPagina\">Última página</a>";

        echo '<br> Total de registros: ' . $numTotal;


    
    ?>

</body>
</html>