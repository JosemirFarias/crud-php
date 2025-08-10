<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Pessoa</title>
</head>

<body>
    <h1>Cadastrar Pessoas</h1>

    <form action="{{route('pessoas.store') }}" method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome" require>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" require>
        <br><br>

        <label>Telefone:</label>
        <input type="text" name="telefone">
        <br><br>

        <button type="submit">Salvar</button>
    </form>
</body>

</html>