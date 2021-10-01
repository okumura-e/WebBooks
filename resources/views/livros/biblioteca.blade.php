<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/biblioteca.css') }}" rel="stylesheet">
    <title>Biblioteca</title>
</head>

<body>
    <div id="geral">

        <div>
            <header>
                <nav>
                    <a id="library" href="biblioteca.html">Biblioteca</a>
                    <a id="recomendacao"href="recomendações.html">Recomendações</a>
                    <a id="destaque" href="destaques.html">Destaques</a>
                    <a id="perfil" href="perfil.html">Meu Perfil</a>
                </nav>
            </header>
        </div>

        <div id="pag">
            <input id="button" type="button" value="📚 Filtro">
            <input id="search" type="search" placeholder="🔍 Pesquisar">
            <div id="book">
                <br>
                <img id="pulo" src="/img/capa_livro.png" alt="">
                <br>
            </div>
        </div>
    </div>
</body>
</html>