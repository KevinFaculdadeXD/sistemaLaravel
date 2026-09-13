<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <container>
            <a href="/">Home</a>
            <a href="/alugueis">Aluguéis</a>
            <a href="/livros">Livros</a>
            <a href="/usuarios">Usuarios</a>
        </container>
            
</head>
<body>
            

<h1>Usuários</h1>
<a href="{{ route('usuarios.login') }}">Login</a>
<ul>
    @foreach ($usuarios as $usuario)
        <li>{{ $usuario->name }} - {{ $usuario->email }}</li>
    @endforeach
</ul>
    
</body>
</html>
