<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="book.png" type="image/x-icon">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <h2>Faça login para continuar</h2>
    <form method="POST" action="{{route('livros.login')}}">
        @csrf
        <img id="user" src="/img/user.png" alt="usuario">
        <input class = "text "type="email" name="email" placeholder="📧 E-mail">
        <br>
        <input class= "text" type="password" name="password" placeholder="🔐 Senha">
        <br>
        <button id= "butt" type="submit" name="Botao"> Login </button>
        <p>Não tem conta?<a href="/cadastro">Crie sua conta</a></p>
    </form>
</body>
</html>