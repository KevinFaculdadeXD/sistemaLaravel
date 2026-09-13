<h1>Publicando Livro</h1>
<form action="{{ route('livros.store') }}" method="POST">
    @csrf

    @include('livros._form')

    <button type="submit">Publicar Livros</button>
    
</form>