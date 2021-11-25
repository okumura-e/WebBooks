<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/profile.css')}}" rel="stylesheet">
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
                    <a id="perfil" href="/perfil">Meu Perfil</a>
                </nav>
            </header>
        </div>

        <div id="pag">
            <br>
            <img id="pulo" src="img/user.png" alt="">
            <h1 id="nome">{{$nome}} {{$snome}}</h1>

            <form action="{{route('livros.update', ['id' => Auth::user()->id])}}" method="POST">
                @csrf
                @method('PUT')
                <input class="text" type="text" name="name" placeholder="👤 {{$nome}}" require>
                <br>
                <input class="text" type="text" name="sname" placeholder="👤 {{$snome}}" require>
                <br>
                <input id="butt" type="submit" value="Salvar" name="Botao">
                <br>
            </form>

            <form method="POST" action="{{route('livros.destroy', ['id' => Auth::user()->id])}}">
                @csrf
                @method('delete')
                <input id="butt" type="submit" value="Deletar Conta" name="deletar">
            </form>
            <br>
        </div>
    </div>
</body>