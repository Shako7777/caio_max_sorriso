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
        <h1 class="pt-5" style="text-align: center;">Max Sorriso</h1>
    </div>
</body>

</html>