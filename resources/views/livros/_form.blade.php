
//Form que vai ficar como padrão

//NOME
<label for="titulo">Titulo:</label>
<input 
    type="text"
    name=titulo
    value="{{old('titulo', $livro->titulo)}}"
    required
    placeholder="Insira o Titulo"
    >

//DATA
<label for="data_publicacao">Data de Publicação:</label>
<input 
    type="data_publicacao"
    name="date"
    value="{{old('data' ($livro->data_publicacao)}}"
    required
    placeholder=""
    >

//Autor
<label for="autor">Autor</label>
<input 
    type="text"
    name="autor"
    required
    placeholder="Insira nome do Autor"
>
//Quantidade
<label for="quantidade_estoque">Quantidade no Estoque</label>
<input 
    type="number"
    name="quantidade_estoque"
    required
    placeholder="1 ,2 , 15..."
    >

//Tema
<label for="tema">Tema:</label>
<select name="tema_id">
    @foreach ($tema as $t)
        <option value="{{ $tema-> id}}"
        @selected($livro->tema_id == $t->id)>
        {{$t->nome}}
    </option>
    @endforeach
</select>

//Descricao
<label for="descricao">Descrição do Livro</label>
<input 
    type="text"
    name="descricao"
    required
    placeholder="Conte para autor um pouco de como livro é, do se trata, e outros assusto que predama atenção do leitor">
