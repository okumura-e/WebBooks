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
                    <a id="library" href="/biblioteca">Biblioteca</a>
                    <a id="recomendacao"href="/recomendacao">Recomendações</a>
                    <a id="destaque" href="/destaque">Destaques</a>
                    <a id="perfil" href="/perfil">Meu Perfil</a>
                </nav>
            </header>
        </div>

        <div id="pag">
            <input class="button" type="button" value="📚 Filtro">
            <input id="search" type="search" placeholder="🔍 Pesquisar">
            
            
            @foreach ($books as $book)
            <div id="book">
                <div class="content">
                    <div class="card">
                        <div class="topCard">
                            <h2 class="title">{{$book->tittle}}</h2>
                        </div>
                        <div class="mediaCard">
                            <picture class="image">
                                <img src="/img/events/{{$book->image}}" alt="capa_livro">
                            </picture>
                            <div class="bottomCard">
                                <p class="bottomText">{{$book->descricao}}</p>
                                <div>
                                    <button class="button">Curtir</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            @endforeach

        </div>
    </div>
</body>
</html>