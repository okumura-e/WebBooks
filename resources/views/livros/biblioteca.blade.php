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
                    <a id="perfil" href="{{route('livros.perfil')}}">Meu Perfil</a>
                </nav>
            </header>
        </div>

        <div id="pesquisa">
            <input class="button" type="button" value="📚 Filtro">
            <input id="search" type="search" placeholder="🔍 Pesquisar">
        </div>
        
        <div id="pag">
            @foreach ($books as $book)
                <div class="card">
                    <h2 class="title">{{$book->tittle}}</h2>
                    <picture class="image">
                        <img src="/img/events/{{$book->image}}" alt="capa_livro">
                    </picture>
                    <div class="textBox">
                        <p class="bottomText">{{$book->descricao}}</p>
                    </div>
                    <a href="/leitura/{{$book->id}}"><button class="cardButton">Começar</button></a>
                </div>  
            @endforeach

        </div>
    </div>
</body>
</html>