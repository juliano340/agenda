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
        <h3><i class="bi bi-person-badge"></i>Contatos</h3>
    </header>
    <div>
        <a class="btn btn-outline-secondary btn-sm " href="index.php?menuop=cad-contatos"><i class="bi bi-person-fill-add"></i> Novo contato</a>
        <br>
        <br>
    </div>

    <div>
        <form action="index.php?menuop=contatos" method="post">
            <input type="text" name="txt_pesquisa" value="">
            <button class="btn btn-outline-success btn-sm mb-2" type="submit"><i class="bi bi-search"> Pesquisar </i></button>
            
        </form>
    </div>
    <table border="1" class="table table-dark table-hover table-bordered table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th class="text-nowrap">Nome</th>
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
                    <a class="btn btn-outline-warning btn-sm" href="index.php?menuop=editar-contato&id=<?=$dados["id_contato"]?>"><i class="bi bi-pencil-square"></i> </a>
                </th>
                <th>
                <a class="btn btn-outline-danger btn-sm" href="index.php?menuop=excluir-contato&id=<?=$dados["id_contato"]?>"> <i class="bi bi-trash"></i> </a>
                </th>
            </tr>
            <?php 
                }
            
            ?>

        </tbody>
    </table>

    <ul class="pagination">
    <?php 

        $sql_total = 'SELECT id_contato FROM contatos';
        $qrTotal = mysqli_query($conexao,$sql_total) or die('ERRO');
        $numTotal = mysqli_num_rows($qrTotal);
        $totalPagina = ceil($numTotal/$quantidade);
        
        echo "<li class='page-item'><span class='page-link'> Total de registros: $numTotal </span></li>";

        echo '<li class="page-item"><a class="page-link" href="?menuop=contatos&pagina=1">Primeira página  </a></li>';

        if($pagina>6) {
            ?>
                <li class="page-item"><a class="page-link" href="?menuop=contatos&pagina=<?php echo $pagina-1?>"> << </a></li>
            <?php
        }

        for ($i=1;$i<=$totalPagina;$i++) {
            if($i == $pagina) {
                echo "<li class='page-tem active'><span class='page-link'>$i</span></li>";
            } else {
                echo "<li class='page-item'> <a class='page-link' href=\"?menuop=contatos&pagina=$i\">$i</a></li> ";
               }
        }

        if($pagina<($totalPagina-5)) {
            ?>
                <li class="page-item"><a class='page-link' href="?menuop=contatos&pagina=<?php echo $pagina+1?>"> >> </a></li>
            <?php
        }

        echo "<li class='page-item'> <a class='page-link' href=\"?menuop=contatos&pagina=$totalPagina\">  Última página</a></ul>";

        


    
    ?>
    </ul>

</body>
</html>