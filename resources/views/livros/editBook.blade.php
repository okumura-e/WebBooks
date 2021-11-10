<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/editBook.css') }}" rel="stylesheet">
    <title>New Work</title>
</head>
<body>
    <div id="geral">
        <form method="POST" action="{{ route('livros.updateBook', ['id' => $book->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{ csrf_field() }}
            <h1 class="add">Título</h1>
            <input type="text" name="tittle" class="add" value="{{$book->tittle}}">
    
            <h1 class="add">Descrição</h1>
            <textarea name="descricao" class="texto" cols="90" rows="3">{{$book->descricao}}</textarea>
            
            <h1 class="add">Obra</h1>
            <textarea name="obra" class="texto" cols="90" rows="50">{{$book->obra}}</textarea>
            <br>
            <h1 class="add">Categorias</h1>
            <select name="categoria1" class="categoria" required>
                <option value="" selected></option>
                <option value="acao">Ação</option>
                <option value="aventura">Aventura</option>
                <option value="comedia">Comédia</option>
                <option value="drama">Drama</option>
                <option value="fantasia">Fantasia</option>
                <option value="ficcao">Ficcção Científica</option>
                <option value="romance">Romance</option>
                <option value="suspense">Suspense</option>
                <option value="terror">Terror</option>

            </select>
            <select name="categoria2" class="categoria">
                <option value="" selected></option>
                <option value="acao">Ação</option>
                <option value="aventura">Aventura</option>
                <option value="comedia">Comédia</option>
                <option value="drama">Drama</option>
                <option value="fantasia">Fantasia</option>
                <option value="ficcao">Ficcção Científica</option>
                <option value="romance">Romance</option>
                <option value="suspense">Suspense</option>
                <option value="terror">Terror</option>
            </select>
            <select name="categoria3" class="categoria">
                <option value="" selected></option>
                <option value="acao">Ação</option>
                <option value="aventura">Aventura</option>
                <option value="comedia">Comédia</option>
                <option value="drama">Drama</option>
                <option value="fantasia">Fantasia</option>
                <option value="ficcao">Ficcção Científica</option>
                <option value="romance">Romance</option>
                <option value="suspense">Suspense</option>
                <option value="terror">Terror</option>
            </select>
            <br>
            <button type="submit" id="butt" name="botao">Salvar</button>
            <br>
        </form>

        <form method="POST" action="{{route('livros.destroyBook', ['id' => $book->id])}}">
            @csrf
            @method('delete')
            <input id="butt" type="submit" value="Deletar" name="deletar">
        </form>
        <br>
    </div>
</body>
</html>