<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/cadastro.css') }}" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
    <h1>Criar Conta</h1>
    <h2>Crie sua conta para continuar</h2>
    <form method="POST" action="{{ route('livros.registro') }}">
        @csrf
        <img id="user" src="/img/user.png" alt="usuario">
        <br>
        <input class="text" type="text" name="name" placeholder="๐ค Nome" require>
        <br>
        <input class="text" type="text" name="sname" placeholder="๐ค Sobrenome" require>
        <br>
        <input class="text" type="email" name="email" placeholder="๐ง E-mail" require >
        <br>
        <input id="bday" type="date" name="date" require>
        <br>
        <input class="text" type="password" name="password" placeholder="๐ Senha" require>
        <br>
        <input class="text" type="password" name="confirm" placeholder="๐ Confirmar Senha" require>
        <br>
        <input type="checkbox" name="checkbox" require>
        <label class="text">Eu li e aceito</label ><a href="termos.txt">os termos</a>
        <br>
        <input id="butt" type="submit" value="Cadastrar" name="Botao">
        <p>Jรก tem conta?<a href="/login">faรงa login</a></p>
    </form>
</body>
</html>