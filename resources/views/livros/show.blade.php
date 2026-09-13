
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p>{{ session('error') }}</p>
    @endif

<h1>{{ $livro->titulo }}</h1>

<h2>Tema: {{ $livro->tema->nome }}</h2>

<h3>Quantidade: {{ $livro->quantidade_estoque }}</h3>

<h3>Autor: {{ $livro->autor }}</h3>

<p>Descrição do Livro: {{ $livro->descricao }}</p>


{{-- ALUGAR LIVRO --}}
@if($livro->quantidade_estoque > 0)

    <form action="{{ route('livros.alugar', $livro) }}" method="POST">
        @csrf

        <button type="submit">
            Alugar Livro
        </button>
    </form>

@else

    <p>Livro indisponível para aluguel.</p>

@endif


{{-- EDITAR --}}
@can('update', $livro)

    <a href="{{ route('livros.edit', $livro) }}">
        Editar Livro
    </a>

@endcan