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
        <form method="POST" action="">
            <h1 class="add">Imagem</h1>
            <input type="file"  name="capa" class="add" required>

            <h1 class="add">Titulo</h1>
            <input type="text" name="titulo" class="add">
    
            <h1 class="add">Descrição</h1>
            <textarea name="descricao" class="texto" cols="90" rows="3"></textarea>
            
            <h1 class="add">Obra</h1>
            <textarea name="obra" class="texto" cols="90" rows="50"></textarea>
            <br>
            <select name="categoria1" class="categoria" required>
                <option value="" selected></option>
                <option value="terror">Terror</option>
                <option value="romance">Romance</option>
                <option value="aventura">Aventura</option>
                <option value="ficcao">Ficcção Científica</option>
            </select>
            <select name="categoria2" class="categoria">
                <option value="" selected></option>
                <option value="terror">Terror</option>
                <option value="romance">Romance</option>
                <option value="aventura">Aventura</option>
                <option value="ficcao">Ficcção Científica</option>
            </select>
            <select name="categoria3" class="categoria">
                <option value="" selected></option>
                <option value="terror">Terror</option>
                <option value="romance">Romance</option>
                <option value="aventura">Aventura</option>
                <option value="ficcao">Ficcção Científica</option>
            </select>
            <br>
            <button type="submit" id="butt" name="postar">Postar</button>
            <br>
        </form>
    </div>
</body>
</html>