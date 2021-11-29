<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Laravel Crud</title>
</head>
<body>
    <!-- Navbar -->
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary justify-content-end">
      <div>
        <div class="navbar-nav">
          <a href="usuarios/novo" class="nav-link active" >Adicionar Usuario</a>
        </div>
      </div>
    </nav>
  </header>
    <div class="container">
    <h1 style="text-align: center; margin: 15px 0 30px">Laravel CRUD</h1>
    <!-- Tabela -->
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Password</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($usuarios as $u )
            <tr>
            <td>{{$u->name}}</td>
            <td>{{$u->email}}</td>
            <td>{{$u->password}}</td>
            <td>{{$u->date_of_birth}}</td>
            <td>
                <a href="usuarios/{{$u->id}}/edit" class="btn btn-info">Editar</a>
            </td>
            <td>
                <form action="usuarios/delete/{{ $u->id }}" method="post">
                @csrf
                @method('delete')
                    <button class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>

