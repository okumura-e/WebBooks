<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/leitura.css') }}" rel="stylesheet">
    <title>Livro</title>
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
        
        <div >
            <picture>
                <img src="/img/events/{{$book->image}}" alt="capa_livro">
            </picture>
            <h1 class="titulo">{{$book->tittle}}</h1>
            <p class="descricao">{{$book->descricao}}</p>
            <p class="obra">{{$book->obra}}</p>
        </div>
    </div>
</body>