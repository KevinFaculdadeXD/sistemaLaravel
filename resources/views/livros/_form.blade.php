{{-- Formulário padrão --}}

{{-- TÍTULO --}}
<label for="titulo">Título:</label>
<input
    type="text"
    name="titulo"
    id="titulo"
    value="{{ old('titulo', $livro->titulo ?? '') }}"
    required
    placeholder="Insira o título"
>

@error('titulo')
    <span>{{ $message }}</span>
@enderror


{{-- DATA --}}
<label for="data_publicacao">Data de Publicação:</label>

<input
    type="date"
    name="data_publicacao"
    id="data_publicacao"
    value="{{ old('data_publicacao', $livro->data_publicacao ?? '') }}"
    required
>

@error('data_publicacao')
    <span>{{ $message }}</span>
@enderror


{{-- AUTOR --}}
<label for="autor">Autor:</label>

<input
    type="text"
    name="autor"
    id="autor"
    value="{{ old('autor', $livro->autor ?? '') }}"
    required
    placeholder="Insira o nome do autor"
>

@error('autor')
    <span>{{ $message }}</span>
@enderror


{{-- QUANTIDADE --}}
<label for="quantidade_estoque">Quantidade no Estoque:</label>

<input
    type="number"
    name="quantidade_estoque"
    id="quantidade_estoque"
    value="{{ old('quantidade_estoque', $livro->quantidade_estoque ?? '') }}"
    required
    min="1"
    placeholder="1, 2, 15..."
>

@error('quantidade_estoque')
    <span>{{ $message }}</span>
@enderror


{{-- TEMA --}}
<label for="tema_id">Tema:</label>

<select name="tema_id" id="tema_id" required>
    @foreach ($tema as $t)
        <option
            value="{{ $t->id }}"
            @selected(isset($livro) && $livro->tema_id == $t->id)
        >
            {{ $t->nome }}
        </option>
    @endforeach
</select>

@error('tema_id')
    <span>{{ $message }}</span>
@enderror


{{-- DESCRIÇÃO --}}
<label for="descricao">Descrição do Livro:</label>

<textarea
    name="descricao"
    id="descricao"
    required
    maxlength="1500"
    placeholder="Conte um pouco sobre o livro e o que pode chamar a atenção do leitor..."
>{{ old('descricao', $livro->descricao ?? '') }}</textarea>

@error('descricao')
    <span>{{ $message }}</span>
@enderror