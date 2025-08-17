<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Detalhes</title>
</head>

<body>

    <div class="container mt-3">
        <h1>Detalhes do Registro</h1>

        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th><strong>ID</strong></th>
                    <td>{{ $pessoa->id }}</td>
                </tr>

                <tr>
                    <th><strong>Nome</strong></th>
                    <td>{{ $pessoa->nome }}</td>
                </tr>

                <tr>
                    <th><strong>Email</strong></th>
                    <td>{{ $pessoa->email }}</td>
                </tr>

                <tr>
                    <th><strong>Telefone</strong></th>
                    <td>{{ $pessoa->telefone }}</td>
                </tr>
            </tbody>
        </table>

        <!-- Botão de deletar -->
        <form action="{{ route('pessoas.destroy', $pessoa->id) }}" method="POST"
            onsubmit="return confirm('Tem certeza que deseja excluir?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Exclir</button>

            <a href="{{ route('pessoas.index') }}" class="btn btn-outline-primary">Voltar
            </a>

        </form>
    </div>

</body>

</html>
