<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Max Sorriso - Doutor</title>
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
        <a type="button" style="float: right;" class="btn btn-primary" href="{{ route('casos.create') }}">+ Novo Caso</a>
        <h1>Listar de Casos</h1>
        <table style="width:100%">
            <thead>
                <tr>
                    <td><p>ID</p></td>
                    <td><p>Código Caso</p></td>
                    <td><p>Doutor</p></td>
                    <td><p>Paciente</p></td>
                    <td><p>Data da Cirurgia</p></td>
                    <td><p>Status</p></td>
                    <td><p>Código do Projeto</p></td>
                    <td><p>Espessura da TC</p></td>
                    <td><p>Tomografia</p></td>
                </tr>
            </thead>
            <tbody>
            @foreach($casos as $caso)
            <tr>
                <td><p>{{ $caso->id }}</p></td>
                <td><p>{{ $caso->codigo_caso }}</p></td>
                <td><p>{{ $caso->doutor->nome }}</p></td>
                <td><p>{{ $caso->paciente->nome }}</p></td>
                <td><p>{{ $caso->data_cirurgia }}</p></td>
                <td><p>{{ $caso->status }}</p></td>
                <td><p>{{ $caso->tomografia->codigo_projeto }}</p></td>
                <td><p>{{ $caso->tomografia->espessura_tc }}</p></td>
                <td><p><a href="{{ URL::asset($caso->tomografia->pasta_arquivo) }}" target="_blank">arquivo</a></p></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>