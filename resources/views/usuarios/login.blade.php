<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
        <container>
                <a href="/">Home</a>
                <a href="/alugueis">Aluguéis</a>
                <a href="/livros">Livros</a>
                <a href="/usuarios">Usuários</a>
                <form action="{{ route('usuarios.logout') }}" method="POST">
                @csrf
                <button type="submit">Sair da conta</button>    </form>
        </container>
</head>

<body>

    <h1>Login</h1>

    <form action="{{ route('authenticate') }}" method="POST">

        @csrf

        <div>
            <label>E-mail:</label>
            <input type="email" name="email" required>
        </div>

        <br>

        <div>
            <label>Senha:</label>
            <input type="password" name="password" required>
        </div>

        <br>

        <button type="submit">
            Entrar
        </button>

    </form>

</body>
</html>