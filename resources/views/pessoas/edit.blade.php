<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Editar</title>

</head>

<body>

    <div class="container mt-3">
        <h1>Editar Cadastro</h1>

        <form action="{{ route('pessoas.update', $pessoa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="nome" placeholder="Enter nome" name="nome"
                    value="{{ $pessoa->nome }}">
                <label for="nome">Nome:</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"
                    value="{{ $pessoa->email }}">
                <label for="email">Email:</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="telefone" placeholder="Enter telefone" name="telefone"
                    value="{{ $pessoa->telefone }}">
                <label for="telefone">Telefone:</label>
            </div>

            <button type="submit" class="btn btn-outline-success">Atualizar</button>

            <a href="{{ route('pessoas.index') }}">
                <button type="button" class="btn btn-outline-primary">Voltar</button>
            </a>
        </form>
    </div>

</body>

</html>
