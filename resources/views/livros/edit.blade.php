<form action="{{ route('livros.update', $livro) }}" method="POST">
    @csrf

      @include('livros._form')

    <form action="{{route('livros.destroy' , $livro)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar Livro</button>
    </form>

    <button type="submit">Salvar Alteração</button>
</form>