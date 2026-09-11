<h1>Aluguéis</h1>

<ul>
    @foreach ($alugueis as $aluguel)
        <li>Livro ID {{ $aluguel->livro_id }} - alugado em {{ $aluguel->data_aluguel }}</li>
    @endforeach
</ul>