<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Max Sorriso - Casos</title>
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
        <a type="button" style="float: right;" class="btn btn-primary" href="{{ route('casos.index') }}">Listar Casos</a>
        <h1>Cadastrar Novo Caso</h1>
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

        <form method="post" action="{{ route('casos.store') }}" enctype="multipart/form-data">

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="form-group">
                <label>Doutor</label>
                <select class="form-control" name="doutor_id" id="doutor_id">
                    @foreach($doutores as $doutor)
                    <option value="{{ $doutor->id }}">{{ $doutor->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Paciente</label>
                <select class="form-control" name="paciente_id" id="paciente_id">
                    @foreach($pacientes as $paciente)
                    <option value="{{ $paciente->id }}">{{ $paciente->nome }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label>Data da Cirurgia</label>
                <input type="date" class="form-control" name="data_cirurgia" id="data_cirurgia">
            </div>

            <div class="form-group">
                <label>Código Caso</label>
                <input type="text" class="form-control" name="codigo_caso" id="codigo_caso">
            </div>

            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status" id="status">
                    @foreach($statuses as $status)
                    <option value="{{ $status->status }}">{{ $status->status }}</option>
                    @endforeach
                </select>
            </div>

            <hr/>
            <h4>Tomografias</h4>
            <hr/>

            <div class="form-group">
                <label>Código do projeto</label>
                <input type="text" class="form-control" name="codigo_projeto">
            </div>

            <div class="form-group">
                <label>Espessura da TC</label>
                <input type="number" class="form-control" name="espessura_tc">
            </div>

            <div class="form-group">
                <input type="file" name="imagem" class="form-control" accept="image/*">
            </div>

            <input type="submit" name="send" value="Cadastrar" class="btn btn-success btn-block">
            <br/>
        </form>
    </div>
</body>

</html>