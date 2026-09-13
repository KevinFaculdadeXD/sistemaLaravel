<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meus Aluguéis</title>
</head>

<body>

    <h1>Meus Livros Alugados</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p>{{ session('error') }}</p>
    @endif

    @if($alugueis->isEmpty())

        <p>Você não possui livros alugados.</p>

    @else

        @foreach($alugueis as $aluguel)

            <div>
                <h2>{{ $aluguel->livro->titulo }}</h2>

                <p>
                    <strong>Autor:</strong>
                    {{ $aluguel->livro->autor }}
                </p>

                <p>
                    <strong>Data do aluguel:</strong>
                    {{ $aluguel->data_aluguel }}
                </p>

                <a href="{{ route('livros.show', $aluguel->livro) }}">
                    Ver Livro
                </a>

                <form
                    action="{{ route('alugueis.devolver', $aluguel) }}"
                    method="POST"
                    style="display:inline;"
                >
                    @csrf

                    <button type="submit">
                        Devolver Livro
                    </button>
                </form>

            </div>

            <hr>

        @endforeach

    @endif

</body>
</html>