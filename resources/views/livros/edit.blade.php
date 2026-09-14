<form action="{{ route('livros.update', $livro) }}" method="POST">
    @csrf
    @method('PUT')

    @include('livros._form')

    <button type="submit">Salvar</button>
</form>


<form action="{{ route('livros.destroy', $livro) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit">Excluir</button>
</form>