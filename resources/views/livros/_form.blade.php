{{-- Formulário padrão --}}

{{-- TÍTULO --}}
<div>
    <label for="titulo" class="block text-sm font-medium text-gray-700">Título:</label>
    <input
        type="text"
        name="titulo"
        id="titulo"
        value="{{ old('titulo', $livro->titulo ?? '') }}"
        required
        placeholder="Insira o título"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-400 focus:ring-indigo-400"
    >
    @error('titulo')
        <span class="text-sm text-red-600">{{ $message }}</span>
    @enderror
</div>

{{-- DATA --}}
<div>
    <label for="data_publicacao" class="block text-sm font-medium text-gray-700">Data de Publicação:</label>
    <input
        type="date"
        name="data_publicacao"
        id="data_publicacao"
        value="{{ old('data_publicacao', $livro->data_publicacao ?? '') }}"
        required
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-400 focus:ring-indigo-400"
    >
    @error('data_publicacao')
        <span class="text-sm text-red-600">{{ $message }}</span>
    @enderror
</div>

{{-- AUTOR --}}
<div>
    <label for="autor" class="block text-sm font-medium text-gray-700">Autor:</label>
    <input
        type="text"
        name="autor"
        id="autor"
        value="{{ old('autor', $livro->autor ?? '') }}"
        required
        placeholder="Insira o nome do autor"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-400 focus:ring-indigo-400"
    >
    @error('autor')
        <span class="text-sm text-red-600">{{ $message }}</span>
    @enderror
</div>

{{-- QUANTIDADE --}}
<div>
    <label for="quantidade_estoque" class="block text-sm font-medium text-gray-700">Quantidade no Estoque:</label>
    <input
        type="number"
        name="quantidade_estoque"
        id="quantidade_estoque"
        value="{{ old('quantidade_estoque', $livro->quantidade_estoque ?? '') }}"
        required
        min="1"
        placeholder="1, 2, 15..."
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-400 focus:ring-indigo-400"
    >
    @error('quantidade_estoque')
        <span class="text-sm text-red-600">{{ $message }}</span>
    @enderror
</div>

{{-- TEMA --}}
<div>
    <label for="tema_id" class="block text-sm font-medium text-gray-700">Tema:</label>
    <select name="tema_id" id="tema_id" required
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-400 focus:ring-indigo-400">
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
        <span class="text-sm text-red-600">{{ $message }}</span>
    @enderror
</div>

{{-- Formulário padrão --}}

{{-- TÍTULO --}}
<div>
    <label for="titulo" class="block text-sm font-medium text-ink/80">Título:</label>
    <input
        type="text"
        name="titulo"
        id="titulo"
        value="{{ old('titulo', $livro->titulo ?? '') }}"
        required
        placeholder="Insira o título"
        class="mt-1 block w-full rounded-md border-walnut shadow-sm focus:border-brass focus:ring-brass"
    >
    @error('titulo')
        <span class="text-sm text-red-600">{{ $message }}</span>
    @enderror
</div>

{{-- DATA --}}
<div>
    <label for="data_publicacao" class="block text-sm font-medium text-ink/80">Data de Publicação:</label>
    <input
        type="date"
        name="data_publicacao"
        id="data_publicacao"
        value="{{ old('data_publicacao', $livro->data_publicacao ?? '') }}"
        required
        class="mt-1 block w-full rounded-md border-walnut shadow-sm focus:border-brass focus:ring-brass"
    >
    @error('data_publicacao')
        <span class="text-sm text-red-600">{{ $message }}</span>
    @enderror
</div>

{{-- AUTOR --}}
<div>
    <label for="autor" class="block text-sm font-medium text-ink/80">Autor:</label>
    <input
        type="text"
        name="autor"
        id="autor"
        value="{{ old('autor', $livro->autor ?? '') }}"
        required
        placeholder="Insira o nome do autor"
        class="mt-1 block w-full rounded-md border-walnut shadow-sm focus:border-brass focus:ring-brass"
    >
    @error('autor')
        <span class="text-sm text-red-600">{{ $message }}</span>
    @enderror
</div>

{{-- QUANTIDADE --}}
<div>
    <label for="quantidade_estoque" class="block text-sm font-medium text-ink/80">Quantidade no Estoque:</label>
    <input
        type="number"
        name="quantidade_estoque"
        id="quantidade_estoque"
        value="{{ old('quantidade_estoque', $livro->quantidade_estoque ?? '') }}"
        required
        min="1"
        placeholder="1, 2, 15..."
        class="mt-1 block w-full rounded-md border-walnut shadow-sm focus:border-brass focus:ring-brass"
    >
    @error('quantidade_estoque')
        <span class="text-sm text-red-600">{{ $message }}</span>
    @enderror
</div>

{{-- TEMA --}}
<div>
    <label for="tema_id" class="block text-sm font-medium text-ink/80">Tema:</label>
    <select name="tema_id" id="tema_id" required
        class="mt-1 block w-full rounded-md border-walnut shadow-sm focus:border-brass focus:ring-brass">
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
        <span class="text-sm text-red-600">{{ $message }}</span>
    @enderror
</div>

{{-- DESCRIÇÃO --}}
<div>
    <label for="descricao" class="block text-sm font-medium text-ink/80">Descrição do Livro:</label>
    <textarea
        name="descricao"
        id="descricao"
        required
        maxlength="1500"
        rows="4"
        placeholder="Conte um pouco sobre o livro e o que pode chamar a atenção do leitor..."
        class="mt-1 block w-full rounded-md border-walnut shadow-sm focus:border-brass focus:ring-brass"
    >{{ old('descricao', $livro->descricao ?? '') }}</textarea>
    @error('descricao')
        <span class="text-sm text-red-600">{{ $message }}</span>
    @enderror
</div>