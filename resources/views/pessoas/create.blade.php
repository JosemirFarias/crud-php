<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Criar Pessoa</title>

</head>

<body>

    <div class="container mt-3">
        <h1>Cadastrar Pessoas</h1>

        <form action="{{ route('pessoas.store') }}" method="POST">
            @csrf
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="nome" placeholder="Enter nome" name="nome"
                    require>
                <label for="nome">Nome</label>

                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email"
                        require>
                    <label for="email">Email</label>
                </div>

                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="telefone" placeholder="Enter telefone"
                        name="telefone" require>
                    <label for="email">Telefone</label>
                </div>
            </div>

            <button type="submit" class="btn btn-outline-success">Salvar</button>

            <a href="{{ route('pessoas.index') }}" class="btn btn-outline-primary">Voltar
            </a>
        </form>
    </div>

</body>

</html>
