<?php 

    include("db/conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Sistema Agendador 1.0</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilo-padrao.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</head>
<body>
    <header class="bg-dark">
        <div class="container">
            
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a href="index.php?menuop=home" class="navbar-brand">
                    <h4>Sistema Agendador</h4>
                </a>
                
                <div class="flex-row navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php?menuop=home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?menuop=contatos">Contato</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?menuop=tarefas">Tarefas</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?menuop=eventos">Eventos</a></li>
                </div>
                
                
                
            </nav>
            
                    
            </ul>

        </div>

    </header>

    <main>
        <div class="container">

        
        <?php 
            $menuop = (isset($_GET['menuop']))?$_GET['menuop']:'home';
            switch ($menuop) {
                case 'home':
                    include("paginas/home/home.php");
                    break;

                case 'contatos':
                    include("paginas/contatos/contatos.php");
                    break;

                case 'cad-contatos':
                        include("paginas/contatos/cad-contatos.php");
                        break;

                case 'inserir-contatos':
                            include("paginas/contatos/inserir-contatos.php");
                            break;
                            
                case 'editar-contato':
                    include("paginas/contatos/editar-contato.php");
                    break;

                case 'atualizar-contato':
                    include("paginas/contatos/atualizar-contato.php");
                    break;

                case 'excluir-contato':
                    include("paginas/contatos/excluir-contato.php");
                    break;
                    
                    case 'confirma-exclusao':
                        include("paginas/contatos/confirma.php");
                        break;
                    

                case 'tarefas':
                    include("paginas/tarefas/tarefas.php");
                    break;

                    case 'eventos':
                        include("paginas/eventos/eventos.php");
                        break;
                default:
                    # code...
                    break;
            }
        
        ?>
        </div>
    </main>

    <footer class="container-fluid fixed-bottom bg-dark">
        <div class="text-center">SIS AGENDADOR v1.0</div>
    </footer>
    
</body>
</html>