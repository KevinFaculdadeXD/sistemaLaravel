<h1>Usuários</h1>

<ul>
    @foreach ($usuarios as $usuario)
        <li>{{ $usuario->name }} - {{ $usuario->email }}</li>
    @endforeach
</ul>