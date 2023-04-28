<header>
    <h3>Cadastro de contatos</h3>
</header>

<div>
    <form action="index.php?menuop=inserir-contatos" method="post">
        <div>
            <label class="form-label" for="nomeContato">Nome</label>
            <input class="form-control" type="text" name="nomeContato">
        </div>

        <div>
            <label class="form-label" for="emailContato">E-mail</label>
            <input class="form-control" type="email" name="emailContato">
        </div>

        <div>
            <label class="form-label" for="telefoneContato">Telefone</label>
            <input class="form-control" type="text" name="telefoneContato">
        </div>

        <div>
            <label class="form-label" for="sexoContato">Sexo</label>
            <input class="form-control" type="select" name="sexoContato">
        </div>

        <div>
            <label class="form-label" for="dataNascContato">Data de nascimento</label>
            <input class="form-control mb-3" type="date" name="dataNascContato">
        </div>
        <div>
            <input class="btn btn-success tb-"type="submit" value="Adicionar" name="btnAdicionar">
        </div>
    </form>
</div>