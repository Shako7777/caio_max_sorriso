<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Max Sorriso - Paciente</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <style>
        table, th, td {
            border: 1px solid black;
            padding: 5px;
        }
        table {
            border-spacing: 15px;
        }
    </style>
</head>
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
        <a type="button" style="float: right;" class="btn btn-primary" href="{{ route('pacientes.create') }}">+ Novo Paciente</a>
        <h1>Listar Pacientes</h1>
        <table style="width:100%">
            <thead>
                <tr>
                    <td><p>ID</p></td>
                    <td><p>Nome</p></td>
                    <td><p>E-mail</p></td>
                    <td><p>Telefone</p></td>
                    <td><p>Data de Nascimento</p></td>
                </tr>
            </thead>
            <tbody>
            @foreach($pacientes as $paciente)
            <tr>
			    <td><p>{{$paciente->id}}</p></td>
                <td><p>{{$paciente->nome}}</p></td>
                <td><p>{{$paciente->email}}</p></td>
                <td><p>{{$paciente->telefone}}</p></td>
                <td><p>{{$paciente->data_nascimento}}</p></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>