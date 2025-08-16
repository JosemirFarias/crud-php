<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>

<body>

    <h1>Editar Cadastro</h1>

    <form action="{{ route('pessoas.update', $pessoa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label>
        <input type="text" name="nome" value="{{ $pessoa->nome}}">
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $pessoa->email}}">
        <br><br>

        <label>Telefone:</label>
        <input type="text" name="telefone" value="{{ $pessoa->telefone}}">
        <br><br>

        <button type="submit">Atualizar</button>

        <a href="{{ route('pessoas.index') }}">
        <button type="button">Lista de Cadastrados</button>
        </a>

    </form>
    
</body>
</html>