<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Max Sorriso - Paciente</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Max Sorriso</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="{{ route('pacientes.index') }}">Pacientes</a>
                    <a class="nav-item nav-link" href="{{ route('doutores.index') }}">Doutores</a>
                    <a class="nav-item nav-link" href="{{ route('casos.index') }}">Casos</a>
                </div>
            </div>
        </nav>
        <hr/>
        <a type="button" style="float: right;" class="btn btn-primary" href="{{ route('pacientes.index') }}">Listar Pacientes</a>
        <h1>Cadastrar Novo Paciente</h1>
        <hr>
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ route('pacientes.store') }}">

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="form-group">
                <label>Telefone</label>
                <input type="text" class="form-control" name="telefone" id="telefone">
            </div>

            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="date" class="form-control" name="data_nascimento" id="data_nascimento">
            </div>

            <input type="submit" name="send" value="Cadastrar" class="btn btn-success btn-block">
        </form>
    </div>
</body>

</html>