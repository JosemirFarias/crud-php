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

    <h1>Detalhes do Registro</h1>

<p><strong>ID:</strong> {{ $pessoa->id }}</p>
<p><strong>Nome:</strong> {{ $pessoa->nome }}</p>
<p><strong>Email:</strong> {{ $pessoa->email }}</p>
<p><strong>Telefone:</strong> {{ $pessoa->telefone }}</p>

<!-- Botão de deletar -->
<form action="{{ route('pessoas.destroy', $pessoa->id) }}" method="POST" 
    onsubmit="return confirm('Tem certeza que deseja excluir?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm">
        <i class="bi bi-trash"></i>
    </button>
</form>
    
</body>
</html>