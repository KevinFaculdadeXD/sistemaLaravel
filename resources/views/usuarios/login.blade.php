<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>

    <h1>Login</h1>

    <form action="{{ route('usuarios.authenticate') }}" method="POST">

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