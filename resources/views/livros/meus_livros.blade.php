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
                @can('create', App\Models\Livro::class)
                    <a href="{{ route('livros.create') }}">Cadastrar Livro</a>
                @endcan
                <form action="{{ route('usuarios.logout') }}" method="POST">
                @csrf
                <button type="submit">Sair da conta</button>    </form>
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
