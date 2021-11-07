<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/newwork.css') }}" rel="stylesheet">
    <title>New Work</title>
</head>
<body>
    <div id="geral">
        <form method="POST" action="{{ route('livros.post') }}" enctype="multipart/form-data">
            @csrf
            {{ csrf_field() }}
            <h1 class="add">Imagem</h1>
            <input type="file"  name="image" class="add" required>

            <h1 class="add">Título</h1>
            <input type="text" name="tittle" class="add">
    
            <h1 class="add">Descrição</h1>
            <textarea name="descricao" class="texto" cols="90" rows="3"></textarea>
            
            <h1 class="add">Obra</h1>
            <textarea name="obra" class="texto" cols="90" rows="50"></textarea>
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
            <button type="submit" id="butt" name="botao">Postar</button>
            <br>
        </form>
    </div>
</body>
</html>