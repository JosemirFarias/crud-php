<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <title>Lista de Cadastros</title>

    </head>
<body>

    <div class="container mt-3">

        <div class="mb-4">
            <h1>Pessoas Cadastradas</h1>
        </div>

        <div class="alert alert-success">
            <strong>
                @if(session('success'))
                {{ session('success') }}
                @endif
            </strong>
        </div>

        <div class="mb-3">
            <a href="{{ route('pessoas.create') }}">
            <button>Adicionar Nova Pessoa</button>
            </a>
        </div>

        <table class="table table-striped">

            <thead>
                <tr>

                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pessoas as $pessoa)
                    <tr>
                        <td>{{ $pessoa->id }}</td>
                        <td>{{ $pessoa->nome }}</td>
                        <td>{{ $pessoa->email }}</td>
                        <td>{{ $pessoa->telefone }}</td>
                        <td>
                            <a href="{{ route('pessoas.edit', $pessoa->id) }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i>
                            </a>

                            <a href="{{ route('pessoas.show', $pessoa->id) }}" class="btn btn-info btn-sm">
                            <i class="bi bi-eye"></i>
                            </a>

                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>