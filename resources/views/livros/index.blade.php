<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
</head>

<body>

    <nav>
        <a href="/">Home</a>
        <a href="/alugueis">Aluguéis</a>
        <a href="/livros">Livros</a>
        <a href="/usuarios">Usuários</a>

        <a href="{{ route('livros.create') }}">Cadastrar Livro</a>
    </nav>

    <h1>Livros Disponíveis</h1>

    <ul>
        @foreach ($livros as $livro)

            <li>
                <p>Nome: {{ $livro->titulo }}</p>
                <p>Quantidade: {{ $livro->quantidade_estoque }}</p>

                <a href="{{ route('livros.show', $livro->id) }}">
                    Ver Detalhes
                </a>
            </li>

        @endforeach
    </ul>

</body>
</html>