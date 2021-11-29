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
          <a href="#" class="nav-link active" >Adicionar Usuario</a>
        </div>
      </div>
    </nav>
  </header>
    <div class="container">


    <!-- Formulario de editar -->
    @if( Request::is('*/edit'))
    <h1 style="text-align: center; margin: 15px 0 30px">Editar Usuario</h1>
    <form action="{{ url('usuarios/update') }}/{{ $usuario->id }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" name="name" class="form-control" value="{{$usuario->name}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{$usuario->email}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" value="{{$usuario->password}}">
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Data</label>
        <input type="date" name="date_of_birth" class="form-control" value="{{$usuario->date_of_birth}}">
    </div>
    <button type="submit" class="btn btn-success">Editar</button>
    </form>

    @else
    <h1 style="text-align: center; margin: 15px 0 30px">Novo Usuario</h1>
    <!-- Formulario de cadastro -->
    <form action="{{url('usuarios/novo')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Data</label>
        <input type="date" name="date_of_birth" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
    @endif
    <br>
    <a href="/" class="btn btn-primary">Voltar</a>
</div>
</body>
</html>
