<container>
    <a href="/">Home</a>
    <a href="/alugueis">Aluguéis</a>
    <a href="/livros">Livros</a>
    <a href="/usuarios">Usuários</a>
    <a href="{{ route('livros.create') }}">Cadastrar Livro</a>
</container>
<h1>Publicando Livro</h1>
<form action="{{ route('livros.store') }}" method="POST">
    @csrf

    @include('livros._form')

    <button type="submit">Publicar Livros</button>
    
</form>