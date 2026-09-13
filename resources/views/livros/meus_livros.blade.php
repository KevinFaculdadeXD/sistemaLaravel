<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <container>
        <a href="/">Home</a>
        <a href="/livros">Livros</a>
        <a href="{{ route('livros.meus_alugueis') }}">Livros Alugados</a>
        <a href="/usuarios">Usuários</a>

        <a href="{{ route('livros.create') }}">Cadastrar Livro</a>
        </container>
            
</head>
<body>
            

<h1>Livros Disponiveis</h1>

<ul>
    @foreach ($livros as $livro)
        <p>Nome: {{$livro->titulo}}</p>
        <p>Quantidade: {{$livro->quantidade_estoque}}</p>
        <a href="{{route('livros.show',$livro->id)}}">Ver Detalhes</a>
    @endforeach
</ul>
    
</body>
</html>
