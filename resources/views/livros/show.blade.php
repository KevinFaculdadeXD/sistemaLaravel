<h1>{{$livro->titulo}}</h1>
<h2>Tema: {{$livro->tema->nome}}</h2>
<h3>Quantidade: {{$livro->quantidade_estoque}}</h3>
<h3>Autor: {{$livro->autor}}</h3>
<p>Descrição do Livro: {{$livro->descricao}}</p>

@can('update', $livro)
<a href="{{route('livros.edit', $livro)}}">Editar Livro</a>
@endcan