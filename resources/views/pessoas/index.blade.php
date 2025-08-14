<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Cadastros</title>

    </head>
<body>
    <h1>Pessoas Cadastradas</h1>

    @if(session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('pessoas.create') }}">
    <button>Adicionar Nova Pessoa</button>
    </a>


    <table dorder="1" cellpadding="5" cellpading="0">
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
                        <a href="{{ route('pessoas.edit', $pessoa->id) }}">
                        <button>Editar</button>
                        </a>

                        <a href="{{ route('pessoas.destroy', $pessoa->id) }}">
                        <button>Excluir</button>
                        </a>

                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
    
</body>
</html>