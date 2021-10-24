<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/destaque.css')}}" rel="stylesheet">
    <title>Destaques</title>
</head>
<body>
    <div id="geral">
        <header>
            <nav>
                <a id="library" href="/biblioteca">Biblioteca</a>
                <a id="recomendacao"href="/recomendacao">Recomendações</a>
                <a id="destaque" href="/destaque">Destaques</a>
                <a id="perfil" href="/perfil">Meu Perfil</a>
            </nav>
        </header>
        <div id="pag">
            <input id="button" type="button" value="📚 Filtro">
            <input id="search" type="search" placeholder="🔍 Pesquisar">
            <div id="book">
                <br>
                <img id="pulo" src="img/capa_livro.png" alt="">
                <br>
            </div>
        </div>
    </div>
</body>
</html>