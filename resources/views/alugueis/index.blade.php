<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <container>
                <a href="/">Home</a>
                <a href="/alugueis">Aluguéis</a>
                <a href="/livros">Livros</a>
                <a href="/usuarios">Usuários</a>
                <a href="{{ route('livros.create') }}">Cadastrar Livro</a>
        </container>
            
</head>
<body>
            

<h1>Aluguéis</h1>

<ul>
    @foreach ($alugueis as $aluguel)
        <li>Livro ID {{ $aluguel->livro_id }} - alugado em {{ $aluguel->data_aluguel }}</li>
    @endforeach
</ul>
    
</body>
</html>
