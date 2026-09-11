<h1>Livros</h1>
<p>XD</p>
<ul>
    @foreach ($livros as $livro)
        <li>{{ $livro->titulo }} - Estoque: {{ $livro->quantidade_estoque }}</li>
    @endforeach
</ul>