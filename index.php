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
    <link rel="stylesheet" href="css/estilo-padrao.css">
</head>
<body>
    <header class="bg-dark">
        <div class="container">
            <h1>Sistema agendador 1.0</h1>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a href="#" class="navbar-brand">
                    <h2>Agenda Logotipo</h2>
                </a>
                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
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
        <div class="text-center">SIS AGENDADOR v1.0 - juliano340.com</div>
    </footer>
    
</body>
</html>