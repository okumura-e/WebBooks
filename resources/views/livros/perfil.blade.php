<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/perfil.css')}}" rel="stylesheet">
    <title>Meu Perfil</title>
</head>
<body>
    <div id="geral">

        <div>
            <header>
                <nav>
                    <a id="library" href="/biblioteca">Biblioteca</a>
                    <a id="recomendacao"href="/recomendacao">Recomendações</a>
                    <a id="destaque" href="/destaque">Destaques</a>
                    <a id="perfil" href="/perfil">Perfil</a>
                </nav>
            </header>
        </div>

        <div id="pag">
            <br>
            <img id="pulo" src="img/user.png" alt="">
            <h1 id="nome">{{$nome}} {{$snome}}</h1>
            
            <div id="book">
                <h3 id="pulo">Continue lendo</h3>
                <br>
                    <div id="list">
                        <h4>titulo</h4>
                        <img src="img/capa_livro.png" alt="">
                    </div>
                <br>

                <div id="list">
                    <h3 id="pulo">Minhas obras</h3>
                    <img src="img/capa_livro.png" alt="">
                </div>
            </div>
            <br>
            <a href="/newwork" ><button id = "butt" type = "submit" name = "newWork"> Nova obra </button></a>
        </div>
    </div>
</body>
</html>